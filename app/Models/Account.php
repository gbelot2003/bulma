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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
