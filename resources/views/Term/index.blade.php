@extends('layout.master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Stretermams')
@section('content')

<table class="table" id="usersTable">
  <div class="d-flex justify-content-end">
    <a href="{{route('term.create')}}" class="btn btn-success">Add term</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Year</th>
        <th scope="col">term name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($terms as $term)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$term->Year}}</td>
        <td>{{$term->term}}</td>
        <td>
        @if($term->status == '1')
        <span class="badge badge-pill badge-info">Active</span>
           @else
        <span class="badge badge-pill badge-info">Not Active</span>
         @endif
   </td>
        <td>
            <a href="{{route('term.edit', $term->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('term.destroy', $term->id)}}">
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
