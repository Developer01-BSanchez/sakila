<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "inventory";
    //calve primaria de la tabla
    protected $primaryKey = "inventory_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion inversa M:1 inventario (inventory) y pelicula (film)
    public function pelicula(){
        return $this->belongsTo( Film::class,'inventory_id');
    }
}
