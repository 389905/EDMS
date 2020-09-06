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
        return view('pages.pollingDivision.show')->with([
          'pollingDivision' => $pollingDivision,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PollingDivision  $pollingDivision
     * @return \Illuminate\Http\Response
     */
    public function edit(PollingDivision $pollingDivision)
    {
        return view('pages.pollingDivision.edit')->with([
          'pollingDivision' => $pollingDivision,
        ]);
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
        $request->validate([
          'name' => ['required'],
        ]);

        $pollingDivision->name = $request['name'];

        if($pollingDivision->save()){
          Session::flash('success', 'Polling Division '.$pollingDivision->name.' was updated');
        }else{
          Session::flash('error', 'Something went wrong!');
        }
        return redirect()->route('district.show', $pollingDivision->district);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PollingDivision  $pollingDivision
     * @return \Illuminate\Http\Response
     */
    public function destroy(PollingDivision $pollingDivision)
    {
        if(PollingDivision::destroy($pollingDivision->id)){
          Session::flash('success', 'Polling Division was deleted');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return back();
    }
}
