<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CampusModel;
use App\models\AddressModel;
use App\models\RepresentativesModel;

use DB;
class CampusController extends Controller{

    public function index(){
        $campus = CampusModel::all();
        return view('school.campus.index',['campus'=>$campus]);
    }
    public function create(){
        $representatives = RepresentativesModel::pluck('fullname','id');
        $campus          = new CampusModel();
        return view('school.campus.create',['representatives'=>$representatives,'campus'=>$campus]);
    }
    public function store(Request $request){
        DB::beginTransaction();
        try {

            $addressData  = $request->only(['colony','city','address','postal_code','state','country','type_address']);
            $addressModel = new AddressModel();
            $address      = $addressModel->add($addressData);

            $campusData               = $request->only(['name','clave_sep','clave_plantel','phone_office','mobile_phone','representative_id']);
            $campusData['address_id'] = $address->id;
            $campusModel              = new CampusModel();
            $campus                   = $campusModel->add($campusData);

            DB::commit();

            alert()->success('El plantel ha sido registrado correctamente');
            return redirect('planteles');
        }catch(\Exception $e) {
            DB::rollBack();
            dd($e);
            alert()->warning("Ha ocurrido en el servidor: ".$e->getMessage());
            return back();
        }

    }
    public function show($id){

    }
    public function edit($campusId){
        $campus = CampusModel::findOrFail($campusId);
        $representatives = RepresentativesModel::pluck('fullname','id');
        return view('school.campus.edit',['campus'=>$campus,'representatives'=>$representatives]);
    }
    public function update(Request $request, $campusId){
        DB::beginTransaction();
        try {

            $campusModel = CampusModel::findOrFail($campusId);

            $addressData  = $request->only(['colony','city','address','postal_code','state','country','type_address']);
            $addressModel = AddressModel::findOrFail($campusModel->address_id);
            $address      = $addressModel->edit($addressData);


            $campusData               = $request->only(['name','clave_sep','clave_plantel','phone_office','mobile_phone','representative_id']);
            $campusData['address_id'] = $addressModel->id;
            $campus                   = $campusModel->edit($campusData);

            DB::commit();

            alert()->success('El plantel ha sido registrado correctamente');
            return redirect('planteles');
        }catch(\Exception $e) {
            DB::rollBack();
            dd($e);
            alert()->warning("Ha ocurrido en el servidor: ".$e->getMessage());
            return back();
        }
    }
    public function destroy($id){
        //
    }
}
