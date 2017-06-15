<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Proveedor extends Model
{

	use Sluggable;

	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $table = "Proveedores";

    protected $fillable = ['nombre','producto','telefono','direccion','contacto','mail','forma_pago','banco','n_cuenta','aprobado','activado'];
}
