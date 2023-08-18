@extends('layout.layout')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Edit Employee')
@section('content')

<div>

    <form method="POST" action="{{route('employee.update', $employee->id)}}">
        @csrf
        @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Employee Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Name" name="name" value="{{$employee->name}}">
          </div>
    
          <div class="form-group col-md-3">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="Enter Email" name="email" value="{{$employee->email}}">
          </div>
    
          <div class="form-group col-md-3">
            <label for="inputZip">Address</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Address" name="address" value="{{$employee->address}}">
          </div>
    
          <div class="form-group col-md-3">
            <label for="inputZip">Phone</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter Stream" name="phone" value="{{$employee->phone}}">
          </div>
        
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputZip">Id NO</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter ID" name="idno" value="{{$employee->idno}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Gender</label>
            <select id="inputState" class="form-control" name="gender" value="{{$employee->gender}}">
              <option selected value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Religion</label>
            <select id="inputState" class="form-control" name="religion" value="{{$employee->religion}}">
              <option selected value="christian">Christian</option>
              <option value="muslim">Muslim</option>
              <option value="hindu">Hindu</option>
              <option value="budhist">Budhist</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">D.O.B</label>
            <input type="date" class="form-control" id="inputZip" placeholder="Enter Date" name="dob" value="{{$employee->dob}}">
          </div>
    </div>
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <label for="inputZip">Photo</label>
            <input type="file" class="form-control-file" name="photo" value="{{$employee->photo}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Signature</label>
            <input type="file" class="form-control-file" name="signature" value="{{$employee->photo}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Department</label>
            <select id="inputState" class="form-control" name="department_id" value="{{$employee->department_id}}">
                @foreach ($departments as $department)
              <option selected value="{{$department->id}}">{{$department->department}}</option>                
                @endforeach
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Designation</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Enter Stream" name="designation" value="{{$employee->designation}}">
          </div>

    </div>
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Qualifications</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Highest Level of Studies" name="qualification" value="{{$employee->qualification}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Subjects</label>
            <select id="inputState" class="form-control" name="subject_id" value="{{$employee->subject_id}}">
                @foreach ($subjects as $subject)
              <option selected value="{{$subject->id}}">{{$subject->name}}</option>                
                @endforeach
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Job Start Date</label>
            <input type="date" class="form-control" id="inputZip"  name="jsd" value="{{$employee->jsd}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Job No</label>
            <input type="string" class="form-control" id="inputZip" placeholder="Enter Job No" name="jobno" value="{{$employee->jobno}}">
          </div>        

    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputZip">Salary</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter Salary" name="salary" value="{{$employee->salary}}">
          </div>

    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>
</div>


@endsection
