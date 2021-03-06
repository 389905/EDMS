<?php

namespace App\Http\Controllers;

use App\GnDivision;
use App\DivSec;
use Illuminate\Http\Request;
use Session;

class GnDivisionController extends Controller
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
    public function create(DivSec $divSec)
    {
        return view('pages.gnDivision.create')->with([
          'divSec' => $divSec,
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
          'divSec_id' => ['required'],
        ]);

          $gnDivision = GnDivision::create([
            'name' => $request['name'],
            'div_sec_id' => $request['divSec_id'],
          ]);

          if($gnDivision){
            Session::flash('success', $gnDivision->name.' was created.');
          }else{
            Session::flash('error', 'Something went wrong!');
          }
          return redirect()->route('divsec.show', $gnDivision->divSec);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GnDivision  $gnDivision
     * @return \Illuminate\Http\Response
     */
    public function show(GnDivision $gnDivision)
    {
        return view('pages.gnDivision.show')->with([
          'gnDivision' => $gnDivision,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GnDivision  $gnDivision
     * @return \Illuminate\Http\Response
     */
    public function edit(GnDivision $gnDivision)
    {
        return view('pages.gnDivision.edit')->with([
          'gnDivision' => $gnDivision,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GnDivision  $gnDivision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GnDivision $gnDivision)
    {
        $request->validate([
          'name' => ['required'],
        ]);

        $gnDivision->name = $request['name'];

        if($gnDivision->save()){
          Session::flash('success', $gnDivision->name.' was updated!');
        }else{
          Session::flash('error', 'Something went wrong!');
        }
        return redirect()->route('divsec.show', $gnDivision->divSec);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GnDivision  $gnDivision
     * @return \Illuminate\Http\Response
     */
    public function destroy(GnDivision $gnDivision)
    {
        if($gnDivision->delete()){
          Session::flash('success', 'Grama Niladhari Division was deleted');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return back();
    }
}
