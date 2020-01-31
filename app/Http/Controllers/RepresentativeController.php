<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\RepresentativesModel;
class RepresentativeController extends Controller
{

    public function index(){
        $representatives = RepresentativesModel::all();
        return view('school.representatives.index',['representatives'=>$representatives]);
    }
    public function create(){
        $representative = new RepresentativesModel();
        return view('school.representatives.create',['representative'=>$representative]);
    }
    public function store(Request $request){
        try {
            $representativeModel = new RepresentativesModel();
            $representativeModel->add($request->all());
            alert()->success('El representante fue registrado correctamente');
            return redirect('representantes');
        }catch(\Exception $e) {
            alert()->warning("Ha ocurrido un error en el servidor: ".$e->message());
            return back();
        }
    }
    public function show($id){
        //
    }
    public function edit($id){
        $representative = RepresentativesModel::findOrFail($id);
        return view('school.representatives.edit',['representative'=>$representative]);
    }
    public function update(Request $request, $id){
        try {
            $representativeModel = RepresentativesModel::findOrFail($id);
            $representativeModel->edit($request->all());
            alert()->success('El representante fue actualizado correctamente');
            return redirect('representantes');
        }catch(\Exception $e) {
            alert()->warning("Ha ocurrido un error en el servidor: ".$e->message());
            return back();
        }
    }
    public function destroy($id)
    {
        //
    }
}
