<?php

namespace App\Http\Controllers;

use App\PollingBooth;
use App\PollingDivision;
use Illuminate\Http\Request;
use Session;

class PollingBoothController extends Controller
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
    public function create(PollingDivision $pollingDivision)
    {
        return view('pages.pollingBooth.create')->with([
          'pollingDivision' => $pollingDivision,
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
          'number' => ['required'],
          'polling_division_id' => ['required'],
        ]);

          $pollingBooth = PollingBooth::create([
            'name' => $request['name'],
            'number' => $request['number'],
            'polling_division_id' => $request['polling_division_id'],
          ]);

          if($pollingBooth){
            Session::flash('success', 'Polling Booth '.$pollingBooth->name.' was added for division '.$pollingBooth->pollingDivision->name);
          }else{
            Session::flash('error', 'Something went wrong!');
          }
          return redirect()->route('pollingDivision.show', $pollingBooth->pollingDivision);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PollingBooth  $pollingBooth
     * @return \Illuminate\Http\Response
     */
    public function show(PollingBooth $pollingBooth)
    {
        return view('pages.pollingBooth.show')->with([
          'pollingBooth' => $pollingBooth,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PollingBooth  $pollingBooth
     * @return \Illuminate\Http\Response
     */
    public function edit(PollingBooth $pollingBooth)
    {
        return view('pages.pollingBooth.edit')->with([
          'pollingBooth' => $pollingBooth,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PollingBooth  $pollingBooth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PollingBooth $pollingBooth)
    {
        $request->validate([
          'name' => ['required'],
          'number' => ['required'],
        ]);

        $pollingBooth->name = $request['name'];
        $pollingBooth->number = $request['number'];

        if($pollingBooth->save()){
          Session::flash('success', $pollingBooth->name.' was updated!');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return redirect()->route('pollingDivision.show', $pollingBooth->pollingDivision);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PollingBooth  $pollingBooth
     * @return \Illuminate\Http\Response
     */
    public function destroy(PollingBooth $pollingBooth)
    {
      $pollingDivision = $pollingBooth->pollingDivision;

      if($pollingBooth->delete()){
        Session::flash('success', 'Polling Booth was deleted');
      }else{
        Session::flash('error', 'Something went wrong!');
      }

      return redirect()->route('pollingDivision.show', $pollingDivision);
    }
}
