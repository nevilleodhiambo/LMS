@extends('layout/layout')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Edit Department')
@section('content')
<form method="POST" action="{{route('department.update', $department->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Department</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Department" name="department" value="{{$department->department}}">
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection