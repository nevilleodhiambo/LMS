@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'hostels')
@section('content')

<table class="table" id="usersTable">
  <div class="d-flex justify-content-end">
    <a href="{{route('hostel.create')}}" class="btn btn-success">Add hostel</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">hostel name</th>
        <th scope="col">Capacity</th>
        <th scope="col">Matron</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($hostels as $hostel)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$hostel->name}}</td>
        <td>{{$hostel->capacity}}</td>
        <td>{{$hostel->employee?->name}}</td>
        <td>
            <a href="{{route('hostel.edit', $hostel->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('hostel.destroy', $hostel->id)}}">
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
