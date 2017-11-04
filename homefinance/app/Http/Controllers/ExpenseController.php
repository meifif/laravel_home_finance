<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$expenses = Expense::all();
    	return view('expense.showall', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$parents = \App\in_out_type::pluck('name', 'id');
    	return view('expense.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate(request(), [
    			'name' 	   => 'required|string',
    			'comments' => 'required|string',
    			'parent'   => 'required|integer'
    			
    	]);
    	Expense::create(request(['name', 'comments', 'parent']));
    	return redirect('/expense');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$parents = \App\in_out_type::pluck('name', 'id');
    	return view('expanse.edit', compact('income', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $Expense)
    {
    	$this->validate(request(), [
    			'name' 	   => 'required|string',
    			'comments' => 'required|string',
    			'parent'   => 'required|integer'
    			
    	]);
    	$Expense->update(request()->all());
    	return redirect('/expense');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
