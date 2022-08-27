<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "fiml";
    //calve primaria de la tabla
    protected $primaryKey = "film_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion M:M entre pelicula (film) y categoria (category)
    //belongsToMany: Parametros
        //1 El modelo a relacionar
        //2 la tabla pivot (tabla debil)
        //3 la fk del modelo actual en el pivot
        //4 la fk del modelo a relacionar en el pivot
    public function categoria(){
        return $this->belongsToMany(Category::class,
                                    'film_category',
                                    'film_id',
                                    'category_id');
    }

    //relacion entre pelicula (film) e inventario (inventory)
    public function inventario(){
        return $this->hasMany( Inventory::class , 'film_id');
    }

    //relacion M:M entre pelicula (film) y actor (actor)
    //belongsToMany: Parametros
        //1 El modelo a relacionar
        //2 la tabla pivot (tabla debil)
        //3 la fk del modelo actual en el pivot
        //4 la fk del modelo a relacionar en el pivot
        public function actor(){
            return $this->belongsToMany( Actor::class,
                                        'film_actor',
                                        'film_id',
                                        'actor_id')->withPivot('last_update');
        }
}
