<?php

namespace App;

class Monument extends Model
{
    public function user(){
		return $this->belongsTo(User::class);
	}
}
