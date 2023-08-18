@extends('layout.layout')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Employees')
@section('content')

<h1>employees</h1>

<table class="table">
    <div class="d-flex justify-content-end">
        <a href="{{route('employee.create')}}" class="btn btn-success">Add employee</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">Job No</th>
        <th scope="col">Name</th>
        <th scope="col">Phone No</th>
        <th scope="col">Email</th>
        <th scope="col">Department</th>
        <th scope="col">Designation</th>
        <th scope="col">Subjects</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($employees as $employee)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$employee->photo}}</td>
        <td>{{$employee->jobno}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->phone}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->department?->department}}</td>
        <td>{{$employee->designation}}</td>
        <td>{{$employee->subject_id}}</td>
        <td>
            <a href="{{route('employee.edit', $employee->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('employee.destroy', $employee->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash">Delete</i>
            </form>
        </td>
      </tr>
        @endforeach
        
    </tbody>
  </table>

@endsection
