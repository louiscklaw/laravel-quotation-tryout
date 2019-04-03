<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Colleagues extends Model
{

    protected $table = 'colleagues';
    protected $primaryKey = 'id';

    protected $fillable = [
        'colleagues_cat',
        'colleagues_name',
        'colleagues_cname',
        'colleagues_ename',
        'colleagues_address',
        'colleagues_contact',
        'colleagues_contact_tel',
        'colleagues_contact_mobile',
        'colleagues_contact_fax',
        'colleagues_contact_email',
        'colleagues_relatedsales',
        'colleagues_cr_code',
        'colleagues_change_time',
        'colleagues_owner_name',
        'colleagues_remark',
        'colleagues_remark2',
        'colleagues_remark3',
        'colleagues_last_mod_user',
        'colleagues_creation_time',
        'colleagues_last_mod_time'
    ];
}
