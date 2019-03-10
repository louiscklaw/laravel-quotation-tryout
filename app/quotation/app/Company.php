<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'company';
    protected $primaryKey = 'id';

    protected $fillable = [
        'company_cat',
        'company_name',
        'company_cname',
        'company_ename',
        'company_address',
        'company_contact',
        'company_contact_tel',
        'company_contact_mobile',
        'company_contact_fax',
        'company_contact_email',
        'company_relatedsales',
        'company_cr_code',
        'company_change_time',
        'company_owner_name',
        'company_remark',
        'company_remark2',
        'company_remark3',
        'company_last_mod_user',
        'company_creation_time',
        'company_last_mod_time'
    ];
}
