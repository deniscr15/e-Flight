<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::latest()->get();

        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();

        if(isset($post['image'])){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/doctors'), $imageName);

            $post['image'] = '/images/doctors/'.$imageName;
        }

        $doctor = Doctor::create($post);

        return redirect(route('doctors.index'))->with('success','Doctor created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $post = $request->all();

        if(isset($post['image'])){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/doctors'), $imageName);

            $post['image'] = '/images/doctors/'.$imageName;
        }

        $doctor = $doctor->update($post);

        return redirect(route('doctors.index'))->with('success','Doctor updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //doctor have transaction
        $transactions = Transaction::where('id_doctor', $doctor->id)->count();

        if($transactions > 0){
            return back()->with('error','Failed to Delete Doctor, Doctor Has Transaction Data!');
        }

        //destroy doctor
        $doctor->delete();
        return back()->with('success','Doctor deleted successfully!');
    }
}
