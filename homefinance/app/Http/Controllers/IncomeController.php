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
    	foreach ($incomes as $income) {
    		dd($income->getParent());
    	}
    	return view('income.showall', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       	$parents = \App\in_out_type::pluck('name', 'id');
    	return view('income.create', compact('parents'));
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
    	income::create(request(['name', 'comments', 'parent']));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
