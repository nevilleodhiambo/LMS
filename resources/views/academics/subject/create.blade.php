@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Subject')
@section('content')
<form method="POST" action="{{route('subject.store')}}">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Subject</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Subject" name="name">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Class</label>
            <select id="inputState" class="form-control" name="class_id">
                @foreach ($kidatos as $kidato)
    
              <option selected value="{{$kidato->id}}">{{$kidato->name}}</option>
                    
                @endforeach
            </select>
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection