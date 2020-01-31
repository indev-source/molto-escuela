<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PeopleModel extends Model
{
    protected $table = 'peoples';
    protected $fillable = ['name','lastname','mothers_lastname','nss','rfc','curp','address_id','campus_id','user_id'];

    public function user(){
        return $this->belongsTo('App\models\UserModel','user_id');
    }
    public function address(){
        return $this->belongsTo('App\models\AddressModel','address_id');
    }
    public function add($people){
        return PeopleModel::create($people);
    }
    public function edit($people){
        return $this->fill($people)->save();
    }
}
