<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuPermitido extends Model
{
    protected $table = "usuPermitidos";
    protected $fillable = ["nombreUsu", "permiso"];

    public function permitido(){
        return $this->permitido;
    }
}

