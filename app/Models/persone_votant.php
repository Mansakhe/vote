<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persone_votant extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function candidat(){
        return $this->hasOne('App\Models\candidat','id','candidat_id');
    }
}
