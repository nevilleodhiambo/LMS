@extends('layout/master')
@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')

<table class="table">
  <div class="d-flex justify-content-end">
    <a href="{{route('book.create')}}" class="btn btn-success">Add Department</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category</th>
        <th scope="col">Name</th>
        <th scope="col">Class</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($books as $book)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$book->category->category}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->kidato?->name}}</td>
        <td>{{$book->price}}</td>
        <td>
          <a href="{{route('book.edit', $book->id)}}">
            <i class = "fa fa-edit"></i>
          </a>
          <form action="">
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
