@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')


<div>
    <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
        @csrf
    <h1>Students Info</h1>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputZip">Students' Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="name" required>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Gender</label>
            <select id="inputState" class="form-control" name="gender">
              <option selected value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Religion</label>
            <select id="inputState" class="form-control" name="religion">
              <option selected value="christian">Christian</option>
              <option value="muslim">Muslim</option>
              <option value="hindu">Hindu</option>
              <option value="budhist">Budhist</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">D.O.B</label>
            <i class="far fa-calendar"></i>
            <input type="date" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="date" required>
          </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputZip">Upi No</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="upi" required>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Photo</label>
            <input type="file" class="form-control-file" name="filename">
          </div>
          

          <div class="form-group col-md-3">
            <label for="inputState">Nationality</label>
            <select id="inputState" class="form-control" name="national">
              <option selected value="kenyan">Kenyan</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Nationality</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Nationality" name="nationality">
          </div>

    </div>

    

<h1>Parents Info</h1>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputZip">Mother Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="mname" required>
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="E.g doe@gmail.com" name="memail">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="mnumber">
          </div>   

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputZip">Father Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g John Doe" name="fname" required>
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="E.g doe@gmail.com" name="femail">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="fnumber">
          </div>   


    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputZip">Guardian Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="gname" required>
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="E.g doe@gmail.com" name="gemail">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="gnumber">
          </div>   

          <div class="form-group col-md-5">
            <label for="exampleFormControlTextarea1">Present Address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter an Address" rows="3" name="raddress"></textarea>
        </div>

        <div class="form-group col-md-5">
            <label for="exampleFormControlTextarea1">Permanent Address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Address" rows="3" name="paddress"></textarea>
        </div>
    

    </div>
    <h1>Students' Academic Info</h1>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputZip">Adm Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="adm">
          </div>   

          <div class="form-group col-md-3">
            <label for="inputState">Class</label>
            <select id="inputState" class="form-control" name="class_id">
                @foreach ($kidatos as $kidato)
    
              <option selected value="{{$kidato->id}}">{{$kidato->name}}</option>
                    
                @endforeach
            </select>
          </div>
    
          <div class="form-group col-md-3">
            <label for="inputState">Stream</label>
            <select id="inputState" class="form-control" name="stream_id">
                @foreach ($streams as $stream)
              <option selected value="{{$stream->id}}">{{$stream->name}}</option>                
                @endforeach
            </select>
          </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
