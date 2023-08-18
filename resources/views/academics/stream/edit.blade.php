@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Streams')
@section('content')
<form method="POST" action="{{route('stream.update', $stream->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Stream</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Stream" name="name" value="{{$stream->name}}">
          </div>

          <button type="submit" class="btn btn-primary">Update</button>

    </div>
</form>

@endsection