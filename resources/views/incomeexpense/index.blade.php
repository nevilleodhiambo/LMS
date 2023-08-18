@extends('layout.master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'expenses')
@section('content')

<table class="table" id="usersTable">
  <div class="d-flex justify-content-end">
    <a href="{{route('expense.create')}}" class="btn btn-success">Add expense</a>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Term</th>
        <th scope="col">Type</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($expenses as $expense)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$expense->term}}</td>
        <td>{{$expense->expense}}</td>
        <td>{{$expense->amount}}</td>
        <td>{{$expense->date}}</td>
        <td>{{$expense->description}}</td>
        <td>
            <a href="{{route('expense.edit', $expense->id)}}">
                <i class="fa fa-edit"></i>
            </a>
            <form method="POST" action="{{route('expense.destroy', $expense->id)}}">
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
