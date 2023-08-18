@extends('layout/master')

@section("PageTitle", isset($PageTitle) ? PageTitle : 'Create Streams')
@section('content')

<table class="table">
  <div class="d-flex justify-content-end">
    <a href="{{route('class.create')}}" class="btn btn-success">Add Class</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Class Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($kidatos as $kidato)
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$kidato->name}}</td>     
            <td>
                <a href="{{route('class.edit', $kidato->id)}}">
                    <i class="fas fa-edit"></i>
                </a>

                <form method="POST" action="{{route('class.destroy', $kidato->id)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        <i class="fa fa-trash">Delete</i>
                </form>
            </td> 
            </tr>
        @endforeach

    </tbody>
  </table>
@endsection