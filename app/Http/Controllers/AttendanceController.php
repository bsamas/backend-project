<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    public function getAllAttendances()
    {
        $attendances = Attendance::all();
        return response()->json(['attendances' => $attendances]);
    }

    public function getSingleAttendance($attendanceId)
    {
        $attendance = Attendance::find($attendanceId);

        if (!$attendance) return response()->json(['error' => 'Attendance not found']);

        $attendance->attendances;

        return response()->json(['attendance' => $attendance]);
    }

    public function postAttendance(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'code'=>'required | unique:attendances',
            'attendance_name'=>'required',
            'semester'=>'required'

        ]);
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);
        }
        $attendance=new Attendance();
        $attendance->code=$request->input('code');
        $attendance->attendance_name=$request->input('attendance_name');
        $attendance->semester=$request->input('semester');

        $attendance->save();
        return response()->json(['attendance' => $attendance],200);
    }

     public function putAttendance(Request $request, $attendanceId)
    {

          $validator=Validator::make($request->all(),
        [

            'code'=>'required ',
            'attendance_name'=>'required',
            'semester'=>'required'

        ]);


        if($validator->fails())
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);

        $attendance = Attendance::find($attendanceId);

        if(!$attendance)  return response()->json(['error'=>'attendance not found']);

        $attendance->update([
            'code'=> $request->code,
            'attendance_name'=> $request->attendance_name,
            'semester'=> $request->semester

        ]);


        // $attendance->update($request->all());
    }

    public function deleteAttendance($attendanceId)
    {

        $attendance = Attendance::find($attendanceId);

        if (!$attendance) return response()->json(['error' => 'attendance not found']);

        $attendance->delete();

        return response()->json(['message' => 'attendance deleted successfully!']);
    }
}
