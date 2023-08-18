@extends('layout/master')

@section('PageTitle', isset($PageTitle) ? PageTitle : 'Dashboard')
@section('content')


<form method = "POST" action="{{route('expense.store')}}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputState">Type</label>
            <select id="inputState" class="form-control" name="expense">
              <option selected value="income">Income</option>
              <option value="expense">Expense</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputState">Term</label>
            <select id="inputState" class="form-control" name="term">
              <option selected value="term One">Term One</option>
              <option value="term Two">Term Two</option>
              <option value="term Three">Term THree</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Date</label>
            <input type="date" class="form-control" id="inputZip"  name="date">
          </div>

          <div class="form-group col-md-3">
            <label for="inputZip">Amount</label>
            <input type="integer" class="form-control" id="inputZip" placeholder="Enter Amount" name="amount">
          </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Description" rows="3" name="description"></textarea>
        </div>
    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
