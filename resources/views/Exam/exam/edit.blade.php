@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Edit Exam')
@section('content')
<form method="POST" action="{{route('exam.update', $exam->id)}}">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="inputZip">Exam Name</label>
            <input type="text" class="form-control" id="inputZip" placeholder="E.g End Of Term Exam" name="name" value="{{$exam->name}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Class</label>
            <select id="inputState" class="form-control" name="class_id" value="{{$exam->class_id}}">
                @foreach ($kidatos as $kidato)
    
              <option selected value="{{$kidato->id}}">{{$kidato->name}}</option>
                    
                @endforeach
            </select>
          </div>
    </div>


    <button type="Update" class="btn btn-primary">Submit</button>

</form>

@endsection