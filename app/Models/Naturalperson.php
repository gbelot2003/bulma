<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naturalperson extends Model
{
    use HasFactory;

    protected $fillable = ['account_id', 'firstName', 'lastName', 'ID_number'];

    /**
     * Relacion con cuentas
     */
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
