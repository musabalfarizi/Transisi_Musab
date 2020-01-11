<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table ="employees";
       protected $primaryKey = 'id_employees';

    protected $fillable = ['nama','id_companies', 'email'];
}
