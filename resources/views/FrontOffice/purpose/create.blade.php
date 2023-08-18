@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create purpose')
@section('content')
<form method="POST" action="{{route('purpose.store')}}">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">purpose</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Visiting, Job" name="purpose">
          </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection