<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VepostUser extends Model
{
    protected $table = 'vepost_user';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}