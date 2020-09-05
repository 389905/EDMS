<?php

namespace App\Http\Controllers;

use App\PollingDivision;
use App\District;
use Illuminate\Http\Request;
use Session;

class PollingDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(District $district)
    {
        return view('pages.pollingDivision.create')->with([
          'district' => $district,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => ['required'],
      ]);

        $pollingDivision = PollingDivision::create([
          'name' => $request['name'],
          'district_id' => $request['district_id'],
        ]);


        if($pollingDivision){
          Session::flash('success', 'Polling Division '.$pollingDivision->name.' was added for district '.$pollingDivision->district->name);
        }else{
          Session::flash('error', 'Something went wrong!');
        }
        return redirect()->route('district.show', $pollingDivision->district);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PollingDivision  $pollingDivision
     * @return \Illuminate\Http\Response
     */
    public function show(PollingDivision $pollingDivision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PollingDivision  $pollingDivision
     * @return \Illuminate\Http\Response
     */
    public function edit(PollingDivision $pollingDivision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PollingDivision  $pollingDivision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PollingDivision $pollingDivision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PollingDivision  $pollingDivision
     * @return \Illuminate\Http\Response
     */
    public function destroy(PollingDivision $pollingDivision)
    {
        //
    }
}
