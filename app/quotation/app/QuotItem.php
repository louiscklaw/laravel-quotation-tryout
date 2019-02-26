<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class QuotItem extends Model
{

    protected $table = 'quotitem';
    protected $primaryKey = 'id';
    protected $fillable = [
        'quotitem_ref',
        'quotitem_item',
        'quotitem_type',
        'quotitem_set_id',
        'quotitem_set_type',
        'quotitem_set_size',
        'quotitem_set_height',
        'quotitem_set_wheight',
        'quotitem_set_value',
        'quotitem_montlyrent',
        'quotitem_unitprice',
        'quotitem_qty',
        'quotitem_subtotal',
        'quotitem_discount',
        'quotitem_des_cm',
        'quotitem_unitp_cm',
        'quotitem_qty_cm',
        'quotitem_subtotal_cm',
        'quotitem_setqty',
        'quotitem_periodqty',
        'quotitem_pricelist',
        'quotitem_forceunitprice',
        'quotitem_unitselling',
        'quotitem_last_mod_user'
    ];
}
