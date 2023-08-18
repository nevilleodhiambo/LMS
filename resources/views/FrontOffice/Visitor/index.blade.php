@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'visitors')
@section('content')

<h1>visitors</h1>

<table class="table">
    <div class="d-flex justify-content-end">
        <a href="{{route('visitor.create')}}" class="btn btn-success">Add visitor</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Purpose</th>
        <th scope="col">Phone</th>
        <th scope="col">Email No</th>
        <th scope="col">Visiting Date</th>
        <th scope="col">Follow Up Date</th>
        <th scope="col">Added By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($visitors as $visitor)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$visitor->name}}</td>
        <td>{{$visitor->purpose?->purpose}}</td>
        <td>{{$visitor->phone}}</td>
        <td>{{$visitor->email}}</td>
        <td>{{$visitor->vdate}}</td>
        <td>{{$visitor->fdate}}</td>
        <td>{{$visitor->add}}</td>
        <td>
            <a href="{{route('visitor.edit', $visitor->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('visitor.destroy', $visitor->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash">Delete</i>
            </form>
        </td>
      </tr>
        @endforeach
        
    </tbody>
  </table>

@endsection
