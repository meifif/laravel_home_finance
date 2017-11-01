<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class in_out_type extends Model
{
   	protected $fillable = ['name', 'description'];
   	
   	public function getChileds () {
   		return 	$this->hasMany(income::class, 'parent');
   	}
}
	