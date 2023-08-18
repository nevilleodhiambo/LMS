@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')

<table class="table">
    <thead>
        <div class="d-flex justify-content-end">
            <a href="{{route('subject.create')}}" class="btn btn-success">Add Subject</a>
        </div>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Subject</th>
        <th scope="col">Class</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($subjects as $subject)
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$subject->name}}</td>
            <td>{{$subject->class?->name}}</td>
            <td>
                <a href="{{route('subject.edit', $subject->id)}}">
                    <i class="fa fa-edit"></i>
                </a>
                <form method="POST" action="{{route('subject.destroy', $subject->id)}}">
                
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash">Delete</i>
                </form>
            </td>
      </tr>
        @endforeach
       
  
    </tbody>
  </table>

@endsection
