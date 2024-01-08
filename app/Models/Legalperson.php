<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legalperson extends Model
{
    use HasFactory;

    protected $fillable = ['account_id', 'nit', 'company_name', 'commercial_registration'];


}
