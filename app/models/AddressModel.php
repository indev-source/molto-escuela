<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    protected $table = 'address';
    protected $fillable = ['address','colony','city','state','postal_code','country','type_address'];


    public function add($address){
        return AddressModel::create($address);
    }
    public function edit($address){
        return $this->fill($address)->save();
    }
}
