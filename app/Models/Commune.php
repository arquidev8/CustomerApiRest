<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['id_reg', 'description'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    
}
