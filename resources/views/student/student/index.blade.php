@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')

<h1>Students</h1>

<table class="table">
    <div class="d-flex justify-content-end">
        <a href="{{route('student.create')}}" class="btn btn-success">Add Student</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Adm</th>
        <th scope="col">Name</th>
        <th scope="col">Photo</th>
        <th scope="col">UPI</th>
        <th scope="col">Gender</th>
        <th scope="col">Class</th>
        <th scope="col">Stream</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($students as $student)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$student->adm}}</td>
        <td>{{$student->name}}</td>
        <td>
          <img src="{{ asset('storage/images/$student->filename') }}" width="60" height="60" class="img img-responsive">
        </td>
        <td>{{$student->upi}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->kidato?->name}}</td>
        <td>{{$student->stream?->name}}</td>
        <td>
            <a href="{{route('student.edit', $student->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('student.destroy', $student->id)}}">
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
