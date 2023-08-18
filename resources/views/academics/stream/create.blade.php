@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Streams')
@section('content')
<form method="POST" action="{{route('stream.store')}}">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Stream</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Stream" name="name">
          </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection