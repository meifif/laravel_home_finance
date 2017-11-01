<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class income extends Model
{
	protected $fillable = ['name', 'parent', 'comments'];
	
	public function getParent() {
		return $this->belongsTo(in_out_type::class, 'parent');
	}
	
}
