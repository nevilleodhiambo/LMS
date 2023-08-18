@extends('layout/layout')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Department')
@section('content')
<form method="POST" action="{{route('department.store')}}">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Department</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Department" name="department">
          </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection