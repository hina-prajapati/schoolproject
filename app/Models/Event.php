<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    
    use Sluggable;

    protected $table ='events';
    protected $fillable = [
     
        'title',
        'date',
        'short_description',
        'long_description',
        'start_time', 'end_time', 'start_date', 'end_date',
        'start_time_period',
        'filename',
        'slug',
        'end_time_period',
        'thumbnail',
        'job_description',
        'address',
       
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
