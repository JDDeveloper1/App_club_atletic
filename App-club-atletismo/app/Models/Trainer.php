<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'trainers';

    protected $fillable = [
        'name', 'image', 'roll'
    ];
}
