<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "category";
    //calve primaria de la tabla
    protected $primaryKey = "category_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion M:M entre categoria (category) y pelicula (film)
    //belongsToMany: Parametros
        //1 El modelo a relacionar
        //2 la tabla pivot (tabla debil)
        //3 la fk del modelo actual en el pivot
        //4 la fk del modelo a relacionar en el pivot
    public function pelicula(){
        return $this->belongsToMany(Film::class,
                                    'film_category',
                                    'category_id',
                                    'film_id')->withPivot('last_update');
    }
}
