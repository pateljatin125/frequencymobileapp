<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whatappstickermodel extends Model
{
    protected $table = 'whatappstickerapps';
    protected $fillable = [
        'image', 'name'
    ];
}
