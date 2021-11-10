<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salary extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'accountno', 'date','basicpay','bounus','da','hra','it','esi','pf','pt' ];

     protected $dates = [ 'deleted_at' ];
}
