<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bugsReport extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'bugsreport_contact_method',
        'bugsreport_category',
        'bugsreport_date',
        'bugsreport_description',
        'bugsreport_remarks',
    ];

    public static $bugsreport_category_list=array(
        // 'enabled'=>['enabled','#008000'],
        // 'disabled'=>['disabled', '#808080'],
        // 'archived'=>['archived','#000080'],
        // 'cancelled'=>['cancelled', '#FF0000'],
        // 'activated'=>['activated','#800080'],
        // 'pre-activate'=>['pre-activate','#FF00FF']
        'improvment'=>['Improvment','limegreen'],
        'bugs'=>['Bugs', 'red'],
        // 'not in HK'=>['Closed', 'red'],
        // 'cancelled'=>['cancelled', 'grey'],
        // 'activated'=>['Pending','dodgerblue'],
        // 'pre-activate'=>['pre-activate','lightpink']
    );

    // public static $client_gender_configuration=array(
    //     'M'=>['M','dodgerblue'],
    //     'F'=>['F','red'],
    // );
}
