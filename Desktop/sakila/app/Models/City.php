<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "city";
    //calve primaria de la tabla
    protected $primaryKey = "city_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre ciudad (city) y dirección (address)
    public function direccion(){
        return $this->hasMany( Address::class , 'city_id');
    }

    //relacion inversa M:1 ciudad (city) y pais (country)
    public function pais(){
        return $this->belongsTo( Country::class,'city_id');
    }
}
