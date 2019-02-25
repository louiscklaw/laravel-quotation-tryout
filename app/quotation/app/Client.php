<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $primaryKey = 'id';

    protected $fillable = [
        'client_name','client_contact_tel'
    ];
}
