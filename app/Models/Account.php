<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['document_number', 'name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
