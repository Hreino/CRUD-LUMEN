<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

    protected $table ='estudiantes';
    protected $fillable=[
        'nombre', 'apellidos', 'edad', 'institucion'
    ];
    
    public $timestamps = false;
    // protected $hidden=['id'];
}