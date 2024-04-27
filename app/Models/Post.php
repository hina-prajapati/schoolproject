<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    use Sluggable;

    protected $table ='posts';
    protected $fillable = [
        'image',
        'icon',
        'section_id',
        'title',
        'date',
        'short_description',
        'long_description',
        'description',
        'link',
        'color',
        'filename',
        'slug',
       
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