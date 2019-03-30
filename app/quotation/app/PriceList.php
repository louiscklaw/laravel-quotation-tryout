<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    protected $table = 'price_list';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'price_list_name',
        'price_list_services_included',
        'price_list_price',
        'price_list_desc',
        'price_list_remarks',
        'price_list_disabled',
        'price_list_criteria',
        'price_list_available_since',
        'price_list_target_id'
    ];

    public static $price_list_disabled_translate=array(
        'Y'=>'disabled',
        'N'=>'enabled'
    );

}
