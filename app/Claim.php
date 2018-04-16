<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
	protected $fillable = [
		'name',
		'phone_number',
		'type',
		'description'
	];
}
