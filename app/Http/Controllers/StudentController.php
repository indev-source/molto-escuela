<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\StudentModel;
use App\models\CampusModel;
use App\models\TutorModel;
use App\models\AddressModel;
use App\models\UserModel;
use App\models\PeopleModel;

use DB;
class StudentController extends Controller
{

    public function index(){
        $students = StudentModel::all();
        return view('school.students.index',['students'=>$students]);
    }
    public function create(){
        $campus    = CampusModel::pluck('name','id');
        $tutors    = TutorModel::pluck('fullname','id');
        return view('school.students.create',['campus'=>$campus,'tutors'=>$tutors]);
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
            $peopleData               = $request->only(['name','lastname','mothers_lastname','curp','rfc','campus_id','birthday','phone_office','mobile_phone']);
            $peopleData['address_id'] = $address->id;
            $peopleData['user_id']    = $user->id;
            $peopleModel              = new PeopleModel();
            $people                   = $peopleModel->add($peopleData);

            $studentData              = $request->only(['tutor_id','credencial']);
            $studentData['people_id'] = $people->id;
            $studentModel             = new StudentModel();
            $studentModel->add($studentData);

            DB::commit();

            alert()->success('El empleado ha sido registrado correctamente');
            return redirect('alumnos');

        }catch(\Exception $e) {
            DB::rollBack();
            dd($e);
            alert()->warning("Ha ocurrido en el servidor: ".$e->getMessage());
            return back();
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id){
        $campus    = CampusModel::pluck('name','id');
        $tutors    = TutorModel::pluck('fullname','id');
        $student = StudentModel::findOrFail($id);
        return view('school.students.edit',['student'=>$student,'campus'=>$campus,'tutors'=>$tutors]);
    }
    public function update(Request $request, $id){
        DB::beginTransaction();
        try{

            $studentModel = StudentModel::findOrFail($id);

            //create poeple's data
            $peopleData               = $request->only(['name','lastname','mothers_lastname','curp','rfc','campus_id','birthday','phone_office','mobile_phone']);
            $peopleModel              = PeopleModel::findOrFail($studentModel->people_id);
            $peopleData['address_id'] = $peopleModel->address_id;
            $peopleData['user_id']    = $peopleModel->user_id;
            $people                   = $peopleModel->add($peopleData);


            //create employee's address
            $addressData  = $request->only(['colony','city','address','postal_code','state','country','type_address']);
            $addressModel = AddressModel::findOrFail($peopleModel->address_id);
            $address      = $addressModel->edit($addressData);

            //create user's credentials
            $userData  = $request->only(['email']);
            $userModel =  UserModel::findOrFail($peopleModel->user_id);
            $user      = $userModel->edit($userData);


            $studentData              = $request->only(['tutor_id','credencial']);
            $studentModel->edit($studentData);

            DB::commit();

            alert()->success('El alumno ha sido actualizado correctamente');
            return redirect('alumnos');

        }catch(\Exception $e) {
            DB::rollBack();
            dd($e);
            alert()->warning("Ha ocurrido en el servidor: ".$e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
