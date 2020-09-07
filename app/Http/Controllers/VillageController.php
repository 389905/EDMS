<?php

namespace App\Http\Controllers;

use App\Village;
use App\GnDivision;
use Illuminate\Http\Request;
use Session;

class VillageController extends Controller
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
    public function create(GnDivision $gnDivision)
    {
        $pollingDivision = $gnDivision->divSec->pollingDivision;

        return view('pages.village.create')->with([
          'gnDivision' => $gnDivision,
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
          'gn_division_id' => ['required'],
          'polling_division_id' => ['required'],
        ]);

          $village = Village::create([
            'name' => $request['name'],
            'gn_division_id' => $request['gn_division_id'],
            'polling_division_id' => $request['polling_division_id'],
          ]);

          if($village){
            Session::flash('success', $village->name.' was created.');
          }else{
            Session::flash('error', 'Something went wrong!');
          }
          return redirect()->route('gndivision.show', $village->gnDivision);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village)
    {
        return view('pages.village.edit')->with([
          'village' => $village,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        $request->validate([
          'name' => ['required'],
        ]);

        $village->name = $request['name'];

        if($village->save()){
          Session::flash('success', $village->name.' was updated!');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return redirect()->route('gndivision.show', $village->gnDivision);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        if($village->delete()){
          Session::flash('success', 'Village was deleted');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return back();
    }
}
