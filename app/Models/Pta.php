<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pta extends Model
{
    use HasFactory;


    protected $table ='ptas';
    protected $fillable = [
     
        'title',
        'date',
        'short_description',
        'long_description',
        'filename',
        'slug',
        'pta_id',
        'job_description',

       
    ];

    public function files()
    {
        return $this->hasMany(File::class, 'pta_id', 'id');
    }
}
