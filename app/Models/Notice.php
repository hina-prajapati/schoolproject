<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notice extends Model
{
    use HasFactory;

    use Sluggable;

    protected $table ='notices';
    protected $fillable = [
     
        'title',
        'date',
        'short_description',
        'filename',
        'slug',
        'job_description',
        'thumbnail',
       
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

          public function sluggable(): array
          {
            return[
                'slug' => [
                    'source' => ['title']
                ]
                ];
          }
}
