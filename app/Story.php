<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
	protected $visible = ['id'];
	
	public function profile()
	{
		return $this->belongsTo(Profile::class);
	}

	public function items()
	{
		return $this->hasMany(StoryItem::class);
	}

	public function reactions()
	{
		return $this->hasMany(StoryReaction::class);
	}

	public function views()
	{
		return $this->hasMany(StoryView::class);
	}
}
