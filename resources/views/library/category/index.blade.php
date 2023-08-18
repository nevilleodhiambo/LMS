@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Book Category')
@section('content')


<table class="table">
    <div class="d-flex justify-content-end">
        <a href="{{route('category.create')}}" class="btn btn-success">Add Category</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($categories as $category)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$category->category}}</td>
        <td>
           <a href="{{route('category.edit', $category->id)}}">
            <i class="fa fa-edit"></i>
        </a>
        <form method="POST" action="{{route('category.destroy', $category->id)}}">
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
