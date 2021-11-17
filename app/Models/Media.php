<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['mood_id', 'user_id', 'url', 'type', 'title', 'description', 'is_active'];
    /**
     * Scope a query to only include active moods.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active',1);
    }

    public function mood(){
        return $this->belongsTo(Mood::class)->withDefault();
    }

}
