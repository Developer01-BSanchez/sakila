<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "customer";
    //calve primaria de la tabla
    protected $primaryKey = "customer_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion inversa M:1 cliente (customer) y dirección (address)
    public function direccion(){
        return $this->belongsTo( Address::class,'customer_id');
    }
}
