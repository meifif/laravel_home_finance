<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\in_out_type;
use Illuminate\Support\Facades\Redirect;

class InOutTypeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	} 
	
	public function index()
	{
		$types = in_out_type::all();
		return view('types.showall', compact('types'));
	}
	
	public function create()
	{
		return view('types.create');
	}
	
	public function store()
	{
		$this->validate(request(), [
				'name' 		  => 'required|alpha_num',
				'description' => 'required|alpha_num'
				
		]);
		\App\in_out_type::create(request(['name', 'description']));
		return redirect('/type');
	}
}
