<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = [
        'user_id',
        'link',
        'description'
    ];

    public function user()
    {

        /* Esta relación indica que un modelo "pertenece a" otro modelo. Por lo general, 
        se usa cuando un modelo contiene una clave externa que referencia a otra tabla.
        Un link pertenece a un único usuario */
        
        return $this->belongsTo(User::class);
    }

}
