@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Create visitor')
@section('content')

<div>

    <form method="POST" action="{{route('visitor.store')}}">
        @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">visitor Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Name" name="name">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Purpose</label>
            <select id="inputState" class="form-control" name="purpose_id">
                @foreach ($purposes as $purpose)
              <option selected value="{{$purpose->id}}">{{$purpose->purpose}}</option>                
                @endforeach
            </select>
          </div>
    
          
          <div class="form-group col-md-3">
            <label for="inputZip">Phone</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Address" name="phone">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="Enter Email" name="email">
          </div>
        
    </div>
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <label for="inputZip">Visiting Date</label>
            <input type="date" class="form-control" id="inputZip" name="vdate">
          </div>

          
          <div class="form-group col-md-3">
            <label for="inputZip">Follow Up Date</label>
            <input type="date" class="form-control" id="inputZip" name="fdate">
          </div>

          
          <div class="form-group col-md-3">
            <label for="inputZip">Added By</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Stream" name="add">
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>


@endsection
