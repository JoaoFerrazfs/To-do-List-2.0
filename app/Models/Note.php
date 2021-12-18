<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = [];
}
