<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public function companyarticle()
	{
		return $this->belongsTo(Company::class, 'company_id', 'id');
	}

	public function sizes()
	{
		return $this->hasMany(Size::class, 'id','size_id');
	}
}
