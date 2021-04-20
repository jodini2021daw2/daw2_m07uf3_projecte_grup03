<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
{
    use HasFactory;
        protected $fillable = [
        'nif',
        'nom',
        'cognoms',
        'adreça',
        'poblacio',
        'comarca',
        'telefonFixe',
        'telefonMobil',
        'email',
        'dataIngres',
        'professionalVoluntari',
        'sou',
	'carrec',
	'seguretatSocial',
	'irpf',
	'edat',
	'professio',
	'hores'
        ];

}
