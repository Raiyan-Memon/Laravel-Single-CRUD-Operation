<?php

namespace App\Models;

use App\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    use TraitUuid;
    use HasFactory;
    protected $fillable = ['name', 'branch', 'enrollno'];

}
