<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::with('doctor')->with('patient')->latest()->get();

        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get Doctor
        $doctors = Doctor::get();

        //get Patient
        $patients = Patient::get();

        return view('transactions.create', compact('doctors', 'patients'));
    }

    public function get_schedule(Request $request)
    {
        
        $schedules = Schedule::where('id_doctor', $request->id_doctor)->get()->toArray();

        $response = [];

        //check Available Schedule
        foreach($schedules as $key => $s){
            $transaction = Transaction::where('date', $request->date)->where('start_time', $s['start_time'])->count();

            if($transaction == 0){
                $s['start_time_formatted'] = date('H:i', strtotime($s['start_time']));
                $s['end_time_formatted'] = date('H:i', strtotime($s['end_time']));

                $response[] = $s;
            }
        }

        return $response;
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

        //get Schedule
        $selected_schedule = Schedule::find($post['schedule']);

        //setting array post
        $post['start_time'] = $selected_schedule['start_time'];
        $post['end_time'] = $selected_schedule['end_time'];
        $post['status'] = 'soon';

        $transaction = Transaction::create($post);

        return redirect(route('transactions.index'))->with('success','Transaction created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //get Doctor
        $doctors = Doctor::get();

        //get Patient
        $patients = Patient::get();


        //get selected schedule
        $selected_schedule = Schedule::where('id_doctor', $transaction->id_doctor)->where('start_time', $transaction->start_time)->first();

        if(!empty($selected_schedule)){
            $selected_schedule = $selected_schedule->toArray();
        } else {
            $selected_schedule = '';
        }

        return view('transactions.edit', compact('transaction', 'doctors', 'patients', 'selected_schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $post = $request->all();

        //get Schedule
        $selected_schedule = Schedule::find($post['schedule']);

        //setting array post
        $post['start_time'] = $selected_schedule['start_time'];
        $post['end_time'] = $selected_schedule['end_time'];

        $transaction = $transaction->update($post);

        return redirect(route('transactions.index'))->with('success','Transaction updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //cek transaction status
        $transaction = Transaction::find($transaction->id);

        if($transaction->status != 'soon'){
            return back()->with('error','Failed to Delete Transaction, Transaction Has Already Started / Done!');
        }

        //destroy transaction
        $transaction->delete();
        return back()->with('success','Transaction deleted successfully!');
    }
}
