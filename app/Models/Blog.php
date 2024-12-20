<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'description', 'is_active', 'published_at'
    ];

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}

	public function getTitleAttribute($value): string
	{
		return ucfirst($value);
	}
}
