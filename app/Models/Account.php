<?php

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['document_number', 'name'];

    protected $casts = [
        'account_type' => AccountType::class
    ];

    /**
     * Relacion con Usuers
     *
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Relacion con Persona Natural
     *
     */
    public function naturalPerson()
    {
        return $this->hasOne(Naturalperson::class);
    }

    public function legalPerson()
    {
        return $this->hasOne(Legalperson::class);
    }
}
