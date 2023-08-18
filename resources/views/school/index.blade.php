@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'schools')
@section('content')

<h1>schools</h1>

<table class="table">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Adress</th>
        <th scope="col">Phone</th>
        <th scope="col">Alternative Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Website</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($schools as $school)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$school->name}}</td>
        <td>{{$school->address}}</td>
        <td>{{$school->phone}}</td>
        <td>{{$school->altphone}}</td>
        <td>{{$school->email}}</td>
        <td>{{$school->website}}</td>
        <td>
            <a href="{{route('school.edit', $school->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('school.destroy', $school->id)}}">
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
