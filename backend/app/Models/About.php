<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'section1_title',
        'section1_content',
        'section2_title',
        'section2_content',
        'image5',
        'extra_info',
    ];
}
