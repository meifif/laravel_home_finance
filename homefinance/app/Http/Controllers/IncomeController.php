<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\income;
use Collective\Html\FormBuilder;

class IncomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	} 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
    	$incomes = income::all();
    	return view('income.showall', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('income.create');
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
    			'comments' => 'string',
    			
    	]);
    	income::create(request(['name', 'comments']));
    	return redirect('/income');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(income $income)
    {
    	return view('income.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, income $income)
    {
    	$this->validate(request(), [
    			'name' 	   => 'required|string',
    			'comments' => 'string',
    			
    	]);
    	$income->update(request()->all());
    	return redirect('/income');
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
