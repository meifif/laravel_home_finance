<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class in_out_type extends Model
{
   	protected $fillable = ['name', 'description'];
   	
   	public function getChileds () {
   		$in  = $this->hasMany(income::class, 'parent');
   		$out = $this->hasMany(Expense::class, 'parent');
   		
   		return empty($in)? $out:$in;
   	}
}
	