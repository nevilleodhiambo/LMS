@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Book Category')
@section('content')
<form method="POST" action="{{route('book.update', $book->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputState">Category</label>
            <select id="inputState" class="form-control" name="category_id" value="{{$book->category_id}}">
                @foreach ($categories as $category)
                
              <option selected value="{{$category->id}}">{{$category->category}}</option>                
                @endforeach
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Book Name" name="name" value="{{$book->name}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Class</label>
            <select id="inputState" class="form-control" name="class_id" value="{{$book->class_id}}">
                @foreach ($kidatos as $kidato)
              <option selected value="{{$kidato->id}}">{{$kidato->name}}</option>                
                @endforeach
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">price</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter Book Price" name="price" value="{{$book->price}}">
          </div>

          <button type="submit" class="btn btn-primary">Update</button>

    </div>
</form>

@endsection