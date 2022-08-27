<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "address";
    //calve primaria de la tabla
    protected $primaryKey = "address_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre dirección (address) y cliente (customer)
    public function cliente(){
        return $this->hasMany( Customer::class , 'address_id');
    }

    //relacion inversa M:1 dirección (address) y ciudad (city)
    public function ciudad(){
        return $this->belongsTo( City::class , 'address_id');
    }
}
