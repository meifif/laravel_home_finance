<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
	protected $fillable = ['name', 'comments', 'parent'];
	
	public function getParent() {
		return $this->belongsTo(in_out_type::class, 'parent');
	}
}
