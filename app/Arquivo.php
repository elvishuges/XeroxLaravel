<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
     protected $fillable = [
        //'nome', 'dataDeBusca', 'xeroxes_id','user_id','status','hash'
        'nome', 'dataDeBusca', 'xeroxes_id','user_id','status','hash','nomeXerox'
    ];
}
