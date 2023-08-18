@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Purpose')
@section('content')

<table class="table">
    <div class="d-flex justify-content-end">
        <a href="{{route('purpose.create')}}" class="btn btn-success">Add purpose</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">purpose </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($purposes as $purpose)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$purpose->purpose}}</td>
        <td>
            <a href="{{route('purpose.edit', $purpose->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('purpose.destroy', $purpose->id)}}">
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
