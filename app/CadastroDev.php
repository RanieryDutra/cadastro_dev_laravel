<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroDev extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'email', 'tipoDev', 'senioridade', 'techs1', 'techs2', 'techs3', 'techs4', 'techs5', 'techs6', 'techs7', 'xp'];
}
