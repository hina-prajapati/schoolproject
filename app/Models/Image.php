<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'gallery_id'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}

