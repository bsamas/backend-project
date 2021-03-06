<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class staffController extends Controller
{
    public function getAllstaffs()
    {
        $staffs = Staff::all();
        return response()->json(['staffs' => $staffs]);
    }

    public function getSinglestaff($staffId)
    {
        $staff = Staff::find($staffId);

        if (!$staff) return response()->json(['error' => 'staff not found']);

        $staff->courses;
        $staff->departments;

        return response()->json(['staff' => $staff]);
    }

    public function poststaff(Request $request)
    {
        $validator=Validator::make($request->all(),
        [

        'staff_number'=>'required',
        'first_name'=>'required',
        'middle_name'=>'required',
        'last_name'=>'required',
        'gender'=>'required',
        'type'=>'required',
        'email'=>'required',
        'phone_number'=>'required',
        'username'=>'required',
        'password'



        ]);
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);
        }
        $staff=new Staff();
        $staff->staff_number=$request->input('staff_number');
        $staff->first_name=$request->input('first_name');
        $staff->middle_name=$request->input('middle_name');
        $staff->last_name=$request->input('last_name');
        $staff->gender=$request->input('gender');
        $staff->type=$request->input('type');
        $staff->email=$request->input('email');
        $staff->username=$request->input('username');
        $staff->password=$request->input('password');
        $staff->phone_number=$request->input('phone_number');




        $staff->save();
        return response()->json(['staff' => $staff],200);
    }



    public function putstaff(Request $request, $staffId)
    {

          $validator=Validator::make($request->all(),
        [
            'staff_number'=>'required',
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'type'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'username'=>'required',
            'password'


        ]);


        if($validator->fails())
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);

        $staff = Staff::find($staffId);

        if(!$staff)  return response()->json(['error'=>'staff not found']);

        $staff->update([
            'staff_number'=> $request->staff_number,
            'first_name'=> $request->first_name,
            'middle_name'=> $request->middle_name,
            'last_name'=> $request->last_name,
            'gender'=> $request->gender,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'type'=> $request->type,
            'username'=> $request->username,
            'password'=> $request->password,

        ]);


        // $staff->update($request->all());
    }

    public function deletestaff($staffId)
    {

        $staff = Staff::find($staffId);

        if (!$staff) return response()->json(['error' => 'staff not found']);

        $staff->delete();

        return response()->json(['message' => 'staff deleted successfully!']);
    }
}
