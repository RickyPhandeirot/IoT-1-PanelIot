<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Led extends Model
{
    use HasFactory;

    // guarded = field mana yang boleh diisi
    // fillable = field mana yang tidak boleh diisi

    protected $guarded = [];
    // protected $fillable = [
    //     'name',
    //     'pin',
    // ];
}
