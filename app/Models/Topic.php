<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function Achiviement(){
        return $this->belongsTo('App\Models\Achiviement');

    }
    public function level(){
        return $this->belongsTo('App\Models\Level');

    }
}
