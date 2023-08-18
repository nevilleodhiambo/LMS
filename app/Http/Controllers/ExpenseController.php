<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Nette\Schema\Expect;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::all();
        return view('incomeexpense/index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incomeexpense/create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->expense = $request->expense;
        $expense->amount = $request->amount;
        $expense->term = $request->term;
        $expense->date = $request->date;
        $expense->description = $request->description;
        $expense->save();
        return redirect()->route('expense.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $expense = Expense::where('id', $id)->first();
        return view('incomeexpense/edit',compact('expense'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $expense = Expense::where('id', $id)->first();
        $expense->expense = $request->expense;
        $expense->amount = $request->amount;
        $expense->term = $request->term;
        $expense->date = $request->date;
        $expense->description = $request->description;
        $expense->save();
        return redirect()->route('expense.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $expense = Expense::where('id', $id)->first();
        $expense->delete();
        return redirect()->route('expense.index');

    }
}
