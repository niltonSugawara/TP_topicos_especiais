<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nome','especialidade','crm','vlr_consulta','endereco'];
    public $timestamps = false;
}
