@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Create school')
@section('content')

<div>

    <form method="POST" action="{{route('school.store')}}" enctype="multipart/form-data">
        @csrf
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">school Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter School Name" name="name">
          </div>  
          
          <div class="form-group col-md-3">
            <label for="inputZip">Address</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Address" name="address">
          </div>

          
          <div class="form-group col-md-3">
            <label for="inputZip">School Phone</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter School Phone" name="phone">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">School Alternative Phone</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Alternative Phone" name="altphone">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">School Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="Enter School Email" name="email">
          </div>
        
    </div>
    <div class="form-row">
        
      <div class="form-group col-md-3">
        <label for="inputZip">School Website</label>
        <input type="text" class="form-control" id="inputZip" placeholder="Enter School Website" name="website">
      </div>
          
      <div class="form-group col-md-3">
        <label for="inputZip">School Logo</label>
        <input type="file" class="form-control-file" name="logo">
            </div>


    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>


@endsection
