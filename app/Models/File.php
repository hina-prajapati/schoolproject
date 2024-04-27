<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'admission_id'];



    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function admission()
    {
        return $this->belongsTo(Admission::class, 'admission_id');
    }


    public function pta()
    {
        return $this->belongsTo(Pta::class, 'pta_id');
    }
}
