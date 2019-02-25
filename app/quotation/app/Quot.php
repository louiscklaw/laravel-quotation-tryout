<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Quot extends Model
{

    protected $table = 'quot';
    protected $primaryKey = 'id';

    protected $fillable = [
        'quot_ref', 'quot_date'
    ];
}
