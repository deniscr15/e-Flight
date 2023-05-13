<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::latest()->get();

        return view('schedules.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schedule(Request $request)
    {
        $doctor_schedules = Schedule::where('id_doctor', $request->id)->get()->toArray();

        $id_doctor = $request->id;

        // dd($doctor_schedules[0]);

        return view('schedules.create', compact('doctor_schedules', 'id_doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_custom(Request $request)
    {
        $post = $request->all();

        //destroy old schedule
        $old_doctor_schedules = Schedule::where('id_doctor', $post['schedules'][0]['id_doctor'])->count();

        if($old_doctor_schedules > 0){
            Schedule::where('id_doctor', $post['schedules'][0]['id_doctor'])->delete();
        }

        //check data dan insert
        foreach($post['schedules'] as $key => $s){
            if($s['start_time'] != '00:00' && $s['start_time'] != null){
                $schedule = Schedule::create($s);
            }
        }

        return redirect(route('schedules.index'))->with('success','Doctor Schedule updated successfully!');
    }
}
