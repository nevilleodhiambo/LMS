@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Streams')
@section('content')
<form method="POST" action="{{route('class.store')}}">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Class</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Class" name="name">
            @error('name')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection