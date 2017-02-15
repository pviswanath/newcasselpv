<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{

       public $timestamps = false;
    protected $fillable=[
            'id',
            'res_pccid',
            'res_fname',
            'res_mname',
            'res_lname',
            'res_gender',
            'res_phone',
            'res_cellphone',
            'res_email',
            'res_comment',
            'res_status',
            'apt_id',
            'cntr_name',
        ];

public function apartments()
{
    return $this->hasMany('App\Apartment','id');
}

}
