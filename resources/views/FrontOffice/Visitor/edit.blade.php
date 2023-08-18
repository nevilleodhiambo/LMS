@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Edit visitor')
@section('content')

<div>

    <form method="POST" action="{{route('visitor.update', $visitor->id)}}">
        @csrf
        @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">visitor Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Name" name="name" value="{{$visitor->name}}">
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
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Address" name="phone" value="{{$visitor->phone}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="Enter Email" name="email" value="{{$visitor->email}}">
          </div>
        
    </div>
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <label for="inputZip">Visiting Date</label>
            <input type="date" class="form-control" id="inputZip" name="vdate" value="{{$visitor->vdate}}">
          </div>

          
          <div class="form-group col-md-3">
            <label for="inputZip">Follow Up Date</label>
            <input type="date" class="form-control" id="inputZip" name="fdate" value="{{$visitor->fdate}}">
          </div>

          
          <div class="form-group col-md-3">
            <label for="inputZip">Added By</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Stream" name="add" value="{{$visitor->add}}">
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>
</div>


@endsection
