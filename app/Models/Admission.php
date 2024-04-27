<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table ='admissions';
    protected $fillable = [
     
        'title',
        'date',
        'short_description',
        'long_description',
        'filename',
        'slug',
        'job_description',
        'admission_id',
       'thumbnail',
    ];

    public function files() {
        return $this->hasMany(File::class, 'admission_id');
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
