<?php

namespace App\Http\Controllers;

use App\Beer;
use Validator;
use Input;
use Redirect;
use Session;
use App;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', [
            'beers' => $beers
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'percentage'      => 'required|numeric',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::to('beers/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $beer = new Beer;
            $beer->name = $request->name;
            $beer->description = $request->description;
            $beer->percentage = $request->percentage;
            $beer->save();
            Session::flash('message', 'Successfully created beer');
            return Redirect::to('beers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $beer = Beer::findOrFail($id);
        return view('beers.show', [
          'beer' => $beer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        //
    }
}
