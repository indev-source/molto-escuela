<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CampusModel extends Model
{
    protected $table = 'campus';
    protected $primaryKey = 'id';

    protected $fillable = ['name','clave_sep','clave_plantel','phone_office','mobile_phone','representative_id','address_id'];

    public function address(){
        return $this->belongsTo('App\models\AddressModel','address_id');
    }
    public function representative(){
        return $this->belongsTo('App\models\RepresentativesModel','representative_id');
    }

    public function add($campus){
        return CampusModel::create($campus);
    }
    public function edit($campus){
        return $this->fill($campus)->save();
    }


}
