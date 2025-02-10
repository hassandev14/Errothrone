<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChoseUs extends Model
{
    protected $table = 'why_chose_us';
    protected $fillable = ['name', 'description'];
}
