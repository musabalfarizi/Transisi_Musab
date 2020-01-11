<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table ="companies";
       protected $primaryKey = 'id_companies';

    protected $fillable = ['nama','email', 'logo', 'website'];
}
