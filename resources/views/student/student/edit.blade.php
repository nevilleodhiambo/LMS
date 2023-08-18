@extends('layout.master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')


<div>
    <form method="POST" action="{{route('student.update', $student->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
    <h1>Students Info</h1>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputZip">Students' Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="name" required value="{{$student->name}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Gender</label>
            <select id="inputState" class="form-control" name="gender" value="{{$student->gender}}">
              <option selected value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Religion</label>
            <select id="inputState" class="form-control" name="religion" value="{{$student->religion}}">
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
            <input type="date" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="date" value="{{$student->date}}" required>
          </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputZip">Upi No</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="upi" value="{{$student->upi}}" required>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Photo</label>
            <input type="file" class="form-control-file" name="filename" value="{{$student->photo}}">
          </div>


          <div class="form-group col-md-3">
            <label for="inputState">Nationality</label>
            <select id="inputState" class="form-control" name="national" value="{{$student->national}}">
              <option selected value="kenyan">Kenyan</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Nationality</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Nationality" name="nationality" value="{{$student->nationality}}">
          </div>

    </div>

    

<h1>Parents Info</h1>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputZip">Mother Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="mname" required value="{{$student->mname}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="E.g doe@gmail.com" name="memail" value="{{$student->email}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="mnumber" value="{{$student->mnumber}}">
          </div>   

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputZip">Father Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g John Doe" name="fname" required value="{{$student->fname}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="E.g doe@gmail.com" name="femail" value="{{$student->femail}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="fnumber" value="{{$student->fnumber}}">
          </div>   


    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputZip">Guardian Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g Jane Doe" name="gname" required value="{{$student->gname}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="inputZip" placeholder="E.g doe@gmail.com" name="gemail" value="{{$student->gemail}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputZip">Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="gnumber" value="{{$student->gnumber}}">
          </div>   

          <div class="form-group col-md-5">
            <label for="exampleFormControlTextarea1">Present Address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter an Address" rows="3" name="raddress">{{$student->raddress}}</textarea>
        </div>

        <div class="form-group col-md-5">
            <label for="exampleFormControlTextarea1">Permanent Address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Address" rows="3" name="paddress">{{$student->paddress}}</textarea>
        </div>
    

    </div>
    <h1>Students' Academic Info</h1>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputZip">Adm Number</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g 0712345678" name="adm" value="{{$student->adm}}">
          </div>   

          <div class="form-group col-md-3">
            <label for="inputState">Class</label>
            <select id="inputState" class="form-control" name="class_id" value="{{$student->class_id}}">
                @foreach ($kidatos as $kidato)
    
              <option selected value="{{$kidato->id}}">{{$kidato->name}}</option>
                    
                @endforeach
            </select>
          </div>
    
          <div class="form-group col-md-3">
            <label for="inputState">Stream</label>
            <select id="inputState" class="form-control" name="stream_id" value="{{$student->stream_id}}">
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
