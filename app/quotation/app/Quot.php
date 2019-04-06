<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Quot extends Model
{

    protected $table = 'quot';
    protected $primaryKey = 'id';

    protected $fillable = [
        'quot_date',
        'quot_ref',
        'quot_to_name',
        'quot_to_address',
        'quot_from_name',
        'quot_from_address',
        'quot_subtotal',
        'quot_discount',
        'quot_total',
        'quot_terms',
        'quot_remarks',
    ];
}
