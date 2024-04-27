<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementImages extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'achievement_id'];

    public function achievement()
    {
        return $this->belongsTo(Achievement::class);
    }
}
