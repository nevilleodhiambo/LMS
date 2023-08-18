@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')

<form method="POST" action="{{route('bcount.store')}}">
    @csrf 
    <div class="form-group col-md-3">
        <label for="inputState">Book Name</label>
        <select id="inputState" class="form-control" name="name_id">
            @foreach ($booknames as $bookname)
            
          <option selected value="{{$bookname->id}}">{{$bookname->name}}</option>                
            @endforeach
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="inputZip">Number</label>
        <input type="integer" class="form-control" id="inputZip" placeholder="Enter Number Bought" name="number">
      </div>

      <div class="form-group col-md-3">
        <label for="inputZip">Date Added</label>
        <input type="date" class="form-control" id="inputZip" name="date">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
