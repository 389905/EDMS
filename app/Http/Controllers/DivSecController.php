<?php

namespace App\Http\Controllers;

use App\DivSec;
use App\PollingDivision;
use Illuminate\Http\Request;
use Session;

class DivSecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.divsec.index')->with([
          'divsecs' => DivSec::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.divSec.create')->with([
          'pollingDivisions' => PollingDivision::all()
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
          'polling_division_id' => ['required'],
        ]);

        $divsec = DivSec::create([
          'name' => $request['name'],
          'polling_division_id' => $request['polling_division_id'],
        ]);

        if($divsec){
          Session::flash('success', $divsec->name.' was added for Polling Division '.$divsec->pollingDivision->name);
        }else{
          Session::flash('error', 'Something went wrong!');
        }
        return redirect()->route('divsec.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DivSec  $divSec
     * @return \Illuminate\Http\Response
     */
    public function show(DivSec $divSec)
    {
        return view('pages.divSec.show')->with([
          'divSec' => $divSec,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DivSec  $divSec
     * @return \Illuminate\Http\Response
     */
    public function edit(DivSec $divSec)
    {
        return view('pages.divSec.edit')->with([
          'divSec' => $divSec,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DivSec  $divSec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DivSec $divSec)
    {
        $request->validate([
          'name' => ['required'],
        ]);

        $divSec->name = $request['name'];

        if($divSec->save()){
          Session::flash('success', $divSec->name.' was updated!');
        }else{
          Session::flash('error', 'Something went wrong!');
        }
        return redirect()->route('divsec.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DivSec  $divSec
     * @return \Illuminate\Http\Response
     */
    public function destroy(DivSec $divSec)
    {
        //
    }
}
