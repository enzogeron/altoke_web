<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
	protected $fillable = [
		'title',
		'excerpt',
		'body',
		'resolution',
		'published_at',
		'position_id'
	];

	public function position() {
		return $this->belongsTo(Position::class);
	}

	public function departments() {
		return $this->belongsToMany(Department::class);
	}
}
