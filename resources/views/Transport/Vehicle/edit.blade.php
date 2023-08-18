@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Edit vehicles')
@section('content')
<form method="POST" action="{{route('vehicle.update', $vehicle->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Vehicle Reg No</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter vehicle" name="regno" value="{{$vehicle->regno}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Capacity</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter vehicle Capacity" name="capacity" value="{{$vehicle->capacity}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Driver</label>
            <select id="inputState" class="form-control" name="employee_id" value="{{$vehicle->employee_id}}">
                @foreach ($employees as $employee)
              <option selected value="{{$employee->id}}">{{$employee->name}}</option>                
                @endforeach
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Conductor</label>
            <select id="inputState" class="form-control" name="conductor_id" value="{{$vehicle->conductor_id}}">
                @foreach ($employees as $employee)
              <option selected value="{{$employee->id}}">{{$employee->name}}</option>                
                @endforeach
            </select>
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection