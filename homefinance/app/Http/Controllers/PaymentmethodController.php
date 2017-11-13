<?php

namespace App\Http\Controllers;

use App\paymentmethod;
use Illuminate\Http\Request;

class PaymentmethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methodes = paymentmethod::all();
        return view('Paymentmethod.showall', compact('methodes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    	]);
    	paymentmethod::create(request(['name']));
    	return redirect('/paymethod');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function show(paymentmethod $paymentmethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function edit(paymentmethod $paymentmethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paymentmethod $paymentmethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentmethod $paymentmethod)
    {
    	
    	$paymentmethod->delete();
    	return redirect('/paymethod');
    }
}
