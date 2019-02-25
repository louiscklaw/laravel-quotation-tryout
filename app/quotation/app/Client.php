<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $primaryKey = 'id';

    protected $fillable = [
        'client_cat',
        'client_name',
        'client_cname',
        'client_ename',
        'client_address',
        'client_contact',
        'client_contact_tel',
        'client_contact_mobile',
        'client_contact_fax',
        'client_contact_email',
        'client_relatedsales',
        'client_cr_code',
        'client_change_time',
        'client_owner_name',
        'client_remark',
        'client_remark2',
        'client_remark3',
        'client_last_mod_user',
        'client_creation_time',
        'client_last_mod_time'
    ];
}
