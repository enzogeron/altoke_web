<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
	protected $fillable = [
		'name',
		'email',
		'faculty',
		'career',
		'phone_number',
		'uuid'
	];
}
