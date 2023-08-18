@extends('layout.master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'vehicles')
@section('content')

<table class="table" id="usersTable">
  <div class="d-flex justify-content-end">
    <a href="{{route('vehicle.create')}}" class="btn btn-success">Add vehicle</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">RegNo</th>
        <th scope="col">Capacity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($vehicles as $vehicle)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$vehicle->regno}}</td>
        <td>{{$vehicle->capacity}}</td>
        <td>
            <a href="{{route('vehicle.edit', $vehicle->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('vehicle.destroy', $vehicle->id)}}">
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
