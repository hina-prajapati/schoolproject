<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posttype extends Model
{
    use HasFactory;




    protected $table ='posttypes';
    protected $fillable = [
        'image',
        'p_name',
        's_name',
        'description',
        'link',
        'color',
       
    ];
}
