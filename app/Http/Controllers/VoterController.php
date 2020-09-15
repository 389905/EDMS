<?php

namespace App\Http\Controllers;

use App\Voter;
use App\PollingBooth;
use App\Village;
use Illuminate\Http\Request;
use Session;

class VoterController extends Controller
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
    public function create(PollingBooth $pollingBooth)
    {
        return view('pages.voter.create')->with([
          'pollingBooth' => $pollingBooth,
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
          'house_number' => ['required'],
          'gender' => ['required'],
          'village_id' => ['required'],
          'polling_booth_id' => ['required'],
        ]);

          $voter = Voter::create([
            'name' => $request['name'],
            'house_number' => $request['house_number'],
            'gender' => $request['gender'],
            'nic' => $request['nic'],
            'race' => $request['race'],
            'village_id' => $request['village_id'],
            'polling_booth_id' => $request['polling_booth_id'],
          ]);

          if($voter){
            Session::flash('success', $voter->name.' was created.');
          }else{
            Session::flash('error', 'Something went wrong!');
          }

          return redirect()->route('pollingbooth.show', $voter->pollingBooth);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {
        return view('pages.voter.edit')->with([
          'voter' => $voter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
      $request->validate([
        'name' => ['required'],
        'house_number' => ['required'],
        'gender' => ['required']
      ]);

        $voter->name = $request['name'];
        $voter->house_number = $request['house_number'];
        $voter->gender = $request['gender'];
        $voter->nic = $request['nic'];
        $voter->race = $request['race'];

        if($voter->save()){
          Session::flash('success', $voter->name.' was updated.');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return redirect()->route('pollingbooth.show', $voter->pollingBooth);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        //
    }
}
