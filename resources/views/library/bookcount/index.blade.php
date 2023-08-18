@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')

<table class="table">
  <div class="d-flex justify-content-end">
    <a href="{{route('bcount.create')}}" class="btn btn-success">Add Book</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Book Name</th>
        <th scope="col">Number Added</th>
        <th scope="col">Date Added</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($bcounts as $bcount)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$bcount->book->name}}</td>
        <td>{{$bcount->number}}</td>
        <td>{{$bcount->date}}</td>
        <td>
        <a href="{{route('bcount.edit', $bcount->id)}}"> <i class="fa fa-edit"></i></a>
        <form method="POST" action="{{route('bcount.destroy', $bcount->id)}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn danger">
                <i class="fa fa-trash"></i>
        </form>
        </td>
      </tr>
        @endforeach
        
      
    </tbody>
  </table>

@endsection
