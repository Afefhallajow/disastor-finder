<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class symptom extends Model
{
    use HasFactory;

    public function illness(){

        return $this->hasOne('App\Models\illness');
    }
}
