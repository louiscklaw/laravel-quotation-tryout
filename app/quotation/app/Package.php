<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'package_name',
        'package_services_included',
        'package_price',
        'package_desc',
        'package_remarks',
        'package_disabled',
        'package_criteria',
        'package_available_since'
    ];

    public static $package_status_configuration=array(
        // 'enabled'=>['enabled','#008000'],
        // 'disabled'=>['disabled', '#808080'],
        // 'archived'=>['archived','#000080'],
        // 'cancelled'=>['cancelled', '#FF0000'],
        // 'activated'=>['activated','#800080'],
        // 'pre-activate'=>['pre-activate','#FF00FF']
        'enabled'=>['enabled','limegreen'],
        'disabled'=>['disabled', 'orange'],
        'archived'=>['archived','grey'],
        'cancelled'=>['cancelled', 'red'],
        'activated'=>['activated','dodgerblue'],
        'pre-activate'=>['pre-activate','lightpink']
    );

}
