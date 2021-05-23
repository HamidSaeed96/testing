<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // protected $table="companies";

    public function employee()
    {
        # code...
        return $this->hasOne('App\Models\Employee');
    }
}
