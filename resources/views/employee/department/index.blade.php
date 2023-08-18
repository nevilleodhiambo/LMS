@extends('layout.layout')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Streams')
@section('content')

<table class="table">
    <div class="d-flex justify-content-end">
        <a href="{{route('department.create')}}" class="btn btn-success">Add Department</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Department Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($departments as $department)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$department->department}}</td>
        <td>
            <a href="{{route('department.edit', $department->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('department.destroy', $department->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-small btn-danger">
                    <i class = "fa fa-trash">Delete</i>
            </form>
        </td>
      </tr> 
        @endforeach
       
     
    </tbody>
  </table>

@endsection
