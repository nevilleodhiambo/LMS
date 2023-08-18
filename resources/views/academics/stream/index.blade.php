@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Streams')
@section('content')

<table class="table" id="usersTable">
  <div class="d-flex justify-content-end">
    <a href="{{route('stream.create')}}" class="btn btn-success">Add Stream</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Stream name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($streams as $stream)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$stream->name}}</td>
        <td>
            <a href="{{route('stream.edit', $stream->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('stream.destroy', $stream->id)}}">
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
