@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')

<form method="POST" action="{{route('bcount.update', $bcount->id)}}">
    @csrf 
    @method('put')
    <div class="form-group col-md-3">
        <label for="inputState">Book Name</label>
        <select id="inputState" class="form-control" name="name_id" value="{{$bcount->name_id}}">
            @foreach ($books as $book)
            
          <option selected value="{{$book->id}}">{{$book->name}}</option>                
            @endforeach
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="inputZip">Number</label>
        <input type="integer" class="form-control" id="inputZip" placeholder="Enter Number Bought" name="number" value="{{$bcount->number}}">
      </div>

      <div class="form-group col-md-3">
        <label for="inputZip">Date Added</label>
        <input type="date" class="form-control" id="inputZip" name="date" value="{{$bcount->date}}">
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection
