<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VepostUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'vepost_user';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    // ... any other methods or properties you need ...
}