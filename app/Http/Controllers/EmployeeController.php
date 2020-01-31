<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\AddressModel;
use App\models\UserModel;
use App\models\PeopleModel;
use App\models\EmployeeModel;

use App\models\CampusModel;
use App\models\PositionModel;

use DB;
class EmployeeController extends Controller{

    public function index(){
        $employees = EmployeeModel::all();
        $positions = PositionModel::all();
        return view('school.employees.index',['employees'=>$employees,'positions'=>$positions]);
    }
    public function getEmployeeWithId($employeeId){
        return EmployeeModel::findOrFail($employeeId);
    }
    public function create(){
        $campus    = CampusModel::pluck('name','id');
        $positions = PositionModel::pluck('name','id');
        return view('school.employees.create',['campus'=>$campus,'positions'=>$positions]);
    }
    public function store(Request $request){
        DB::beginTransaction();
        try{

            //create employee's address
            $addressData  = $request->only(['colony','city','address','postal_code','state','country','type_address']);
            $addressModel = new AddressModel();
            $address      = $addressModel->add($addressData);

            //create user's credentials
            $userData             = $request->only(['email','password']);
            $userModel            = new UserModel();
            $userData['password'] = $userModel->cryptPassword($userData['password']);
            $user                 = $userModel->add($userData);

            //create poeple's data
            $peopleData               = $request->only('name','lastname','mothers_lastname','nss','curp','rfc','campus_id');
            $peopleData['address_id'] = $address->id;
            $peopleData['user_id']    = $user->id;
            $peopleModel              = new PeopleModel();
            $people                   = $peopleModel->add($peopleData);

            //create employee's data
            $employee              = $request->only(['position_id']);
            $employee['people_id'] = $people->id;
            $employeeModel         = new EmployeeModel();
            $employeeModel->add($employee);

            DB::commit();

            alert()->success('El empleado ha sido registrado correctamente');
            return redirect('empleados');

        }catch(\Exception $e) {
            DB::rollBack();
            alert()->warning("Ha ocurrido en el servidor: ".$e->getMessage());
            return back();
        }
    }
    public function show($id){
        //
    }
    public function edit($employeeId){
        $employee  = $this->getEmployeeWithId($employeeId);
        $campus    = CampusModel::pluck('name','id');
        $positions = PositionModel::pluck('name','id');
        return view('school.employees.edit',['employee'=>$employee,'campus'=>$campus,'positions'=>$positions]);
    }
    public function update(Request $request, $employeeId){
        DB::beginTransaction();
        try{
            $employeeModel  = $this->getEmployeeWithId($employeeId);

            //update poeple's data
            $peopleData               = $request->only('name','lastname','mothers_lastname','nss','curp','rfc','campus_id');
            $peopleModel              = PeopleModel::findOrFail($employeeModel->people_id);
            $people                   = $peopleModel->edit($peopleData);

            //create employee's address
            $addressData  = $request->only(['colony','city','address','postal_code','state','country','type_address']);
            $addressModel = AddressModel::findOrFail($peopleModel->address_id);
            $address      = $addressModel->edit($addressData);

            //create user's credentials
            $userData  = $request->only(['email']);
            $userModel =  UserModel::findOrFail($peopleModel->user_id);
            $user      = $userModel->edit($userData);



            //create employee's data
            $employee              = $request->only(['position_id']);
            $employee['people_id'] = $peopleModel->id;
            $employeeModel->edit($employee);

            DB::commit();

            alert()->success('El empleado ha sido actualizado correctamente');
            return redirect('empleados');

        }catch(\Exception $e) {
            DB::rollBack();
            dd($e);
            alert()->warning("Ha ocurrido en el servidor: ".$e->getMessage());
            return back();
        }
    }
    public function destroy($id)
    {
        //
    }
}
