@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'exams')
@section('content')

<table class="table" id="usersTable">
  <div class="d-flex justify-content-end">
    <a href="{{route('exam.create')}}" class="btn btn-success">Add exam</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Exam name</th>
        <th scope="col">Class</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($exams as $exam)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$exam->name}}</td>
        <td>{{$exam->kidato?->pluck('name')}}</td>
        <td>
            <a href="{{route('exam.edit', $exam->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('exam.destroy', $exam->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-small btn-danger">
                    <i class = "fa fa-trash">Delete</i>
            </form>
        </td>
      </tr> 
        @endforeach
       
     
    </tbody>
  </table>

@endsection

@section('footer')
<script>
  $(document)
  .ready(function(){
    $('#usersTable')
    .DataTable()
  });
</script>
@endsection
