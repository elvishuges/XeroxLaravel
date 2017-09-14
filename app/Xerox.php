<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xerox extends Model
{
    protected $fillable = [
        'descricao', 'precoFolha','nome','user_id'
    ];

      public function arquivos() // um usuario tem muitos arquivos
    {
           return $this->hasMany(Arquivo::class);
    }
}
