@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Book Category')
@section('content')
<form method="POST" action="{{route('category.update', $category->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Category</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Book Category" name="category" value="{{$category->category}}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</form>

@endsection