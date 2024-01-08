<?php

namespace App\Models;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;


use Illuminate\Database\Eloquent\Model;

class AccountUser extends Model
{
    use EagerLoadPivotTrait;

    protected $table = 'account_user';



}
