<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\income;
use App\Expense;

class scenarioController extends Controller
{
    /**
     * Display a listing of the past scenarios.
     *
     * @return \Illuminate\Http\Response
     */
	public function pastIndex()
    {
        //
    }

    /**
     * Display a listing of the future scenarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function futureIndex()
    {
    	//
    }
    
    /**
     * Display a listing of the current scenarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//
    }
    /**
     * Show the form for creating a new scenario.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incomes = income::all();
        $expances = Expense::all();
        return view('scenario.create', compact('incomes', 'expances'));
    }

    /**
     * Store a newly created scenario in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified scenario.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified scenario.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified scenario in storage.
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
     * Remove the specified scenario from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
