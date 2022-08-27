<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "country";
    //calve primaria de la tabla
    protected $primaryKey = "country_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre pais (country) y ciudad (city)
    public function ciudad(){
        return $this->hasMany( City::class , 'country_id');
    }
}
