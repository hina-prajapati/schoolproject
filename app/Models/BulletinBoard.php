<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulletinBoard extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'date',
        'link',
        'cover',
        'place',
    ];

    public function sluggable(): array
    {
      return[
          'slug' => [
              'source' => ['title']
          ]
          ];
    }
}
