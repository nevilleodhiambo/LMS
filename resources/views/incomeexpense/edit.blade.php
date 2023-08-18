@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')


<form method = "POST"action="{{route('expense.update', $expense->id)}}">
    @csrf
    @method('put')
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputState">Type</label>
            <select id="inputState" class="form-control" name="expense" value="{{$expense->expense}}">
              <option selected value="income">Income</option>
              <option value="expense">Expense</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Term</label>
            <select id="inputState" class="form-control" name="term" value="{{$expense->term}}">
              <option selected value="term_one">Term One</option>
              <option value="term_two">Term Two</option>
              <option value="term_three">Term THree</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Date</label>
            <input type="date" class="form-control" id="inputZip"  name="date" value="{{$expense->date}}">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Amount</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter Amount" name="amount" value="{{$expense->amount}}">
          </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Description" rows="3" name="description">{{$expense->amount}}</textarea>
        </div>
    
    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection
