<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Site extends Model
{

    protected $table = 'site';
    protected $primaryKey = 'id';

    protected $fillable = [
        'site_cat',
        'site_name',
        'site_cname',
        'site_ename',
        'site_address',
        'site_contact',
        'site_contact_tel',
        'site_contact_mobile',
        'site_contact_fax',
        'site_contact_email',
        'site_relatedsales',
        'site_cr_code',
        'site_change_time',
        'site_owner_name',
        'site_remark',
        'site_remark2',
        'site_remark3',
        'site_last_mod_user',
        'site_creation_time',
        'site_last_mod_time'
    ];
}
