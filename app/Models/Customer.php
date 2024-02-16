<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = ['dni', 'id_reg', 'id_com', 'email', 'name', 'last_name', 'address', 'date_reg', 'status', 'deleted_at'];
    // protected $dates = ['deleted_at']; // Indica que la columna deleted_at debe ser tratada como una fecha

    // public function getRouteKeyName()
    // {
    //     return 'dni';
    // }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
