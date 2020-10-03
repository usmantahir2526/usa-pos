<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	public function sizes()
	{
		return $this->hasMany(Size::class,'company_id','id');
	}

	public function articles()
	{
		return $this->hasMany(Article::class,'company_id','id');
	}
}
