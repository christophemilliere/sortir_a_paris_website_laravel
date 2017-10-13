<?php

namespace App\Models;

class Monument extends Model
{
    public function user(){
		return $this->belongsTo(User::class);
	}
}
