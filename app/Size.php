<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
	public function companysize()
	{
		return $this->belongsTo(Company::class, 'company_id', 'id');
	}

	public function article()
	{
		return $this->belongsTo(Article::class);
	}
}
