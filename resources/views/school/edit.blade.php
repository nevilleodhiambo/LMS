@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Create school')
@section('content')

<div>

    <form method="POST" action="{{route('school.update',$school->id)}}">
        @csrf
        @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">school Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter School Name" name="name" value="{{$school->name}}">
          </div>  
          
          <div class="form-group col-md-3">
            <label for="inputZip"><Address></Address></label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Address" name="address" value="{{$school->address}}">
          </div>

          
          <div class="form-group col-md-3">
            <label for="inputZip">School Phone</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter School Phone" name="phone" value="{{$school->phone}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">School Alternative Phone</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Alternative Phone" name="altphone" value="{{$school->altphone}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">School Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="Enter School Email" name="email" value="{{$school->email}}">
          </div>
        
    </div>
    <div class="form-row">
        
      <div class="form-group col-md-3">
        <label for="inputZip">School Website</label>
        <input type="text" class="form-control" id="inputZip" placeholder="Enter School Website" name="website" value="{{$school->email}}">
      </div>
          
      <div class="form-group col-md-3">
        <label for="inputZip">School Logo</label>
        <input type="file" class="form-control-file" name="logo" value="{{$school->logo}}">
            </div>


    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>
</div>


@endsection
