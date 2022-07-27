<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapak extends Model
{
    // use HasFactory;
    public function pedagang(){
        return $this->belongTo(Pedagang::class);
    }
     
}