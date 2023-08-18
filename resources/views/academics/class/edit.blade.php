@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Update Class')
@section('content')
<form method="POST" action="{{route('class.update', $kidato->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Class</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Class" value="{{$kidato->name}}" name="name">
        </div>

          <button type="submit" class="btn btn-primary">Update</button>

    </div>
</form>

@endsection