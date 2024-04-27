<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'thumbnail', 'date', 'place'];

    public function achievement_images()
    {
        return $this->hasMany(AchievementImages::class, 'achievement_id');
    }
    
}
