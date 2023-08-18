@extends('layout/master')
@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create hostels')
@section('content')
<form method="POST" action="{{route('hostel.update', $hostel->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter hostel" name="name" value="{{$hostel->name}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Capacity</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter Capacityel" name="capacity" value="{{$hostel->capacity}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Matron</label>
            <select id="inputState" class="form-control" name="employee_id" value="{{$hostel->employee_id}}">
                @foreach ($employees as $employee)
              <option selected value="{{$employee->id}}">{{$employee->name}}</option>                
                @endforeach
            </select>
          </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection