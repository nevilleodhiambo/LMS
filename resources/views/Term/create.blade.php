@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Terms')
@section('content')
<form method="POST" action="{{route('term.store')}}">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Year</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Year" name="year">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Term</label>
            <select id="inputState" class="form-control" name="term">
              <option selected value="Term_One">Term One</option>
              <option value="Term_Two">Term Two</option>
              <option value="Term_Three">Term Three</option>
            </select>
          </div>

            
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value = "1" {{ old('active') == 1 ? 'checked' : ''}}>
            <label class="form-check-label" for="exampleCheck1">Active</label>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection