@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Edit purpose')
@section('content')
<form method="POST" action="{{route('purpose.update', $purpose->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">purpose</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter purpose" name="purpose" value="{{$purpose->purpose}}">
          </div>


    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection