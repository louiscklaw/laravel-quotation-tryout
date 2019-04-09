<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'client_name',

        'client_cname',
        'client_gender',
        'client_brithday',
        'client_whatsapp',
        'client_mobile',
        'client_address',
        'client_email',
        'client_remarks',
        'client_date',
        'client_status',
        'client_update_at',
        'client_create_at',
        'client_desc',
        'client_remarks'
    ];

    public static $client_status_configuration=array(
        // 'enabled'=>['enabled','#008000'],
        // 'disabled'=>['disabled', '#808080'],
        // 'archived'=>['archived','#000080'],
        // 'cancelled'=>['cancelled', '#FF0000'],
        // 'activated'=>['activated','#800080'],
        // 'pre-activate'=>['pre-activate','#FF00FF']
        'allowed to contact'=>['Active','limegreen'],
        'DND'=>['Closed', 'red'],
        'not in HK'=>['Closed', 'red'],
        // 'cancelled'=>['cancelled', 'grey'],
        'activated'=>['Pending','dodgerblue'],
        // 'pre-activate'=>['pre-activate','lightpink']
    );

    public static $client_gender_configuration=array(
        'M'=>['M','dodgerblue'],
        'F'=>['F','red'],
    );


    public static $client_tags_configuration=array(
        'tall'=>['tall','dodgerblue'],
        'shot'=>['shot','red'],
        'fat'=>['fat','red'],
        'slim'=>['slim','red'],
    );



}
