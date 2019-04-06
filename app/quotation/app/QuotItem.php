<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class QuotItem extends Model
{

    protected $table = 'quotitem';
    protected $primaryKey = 'id';
    protected $fillable = [
        'quotitem_ref',
        'quotitem_name',
        'quotitem_quantity',
        'quotitem_unitprice',
        'quotitem_subtotal',
        'quotitem_remarks'
    ];
}
