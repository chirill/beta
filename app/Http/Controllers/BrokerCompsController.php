<?php

namespace App\Http\Controllers;

use App\Comp;
use App\Location;
use Illuminate\Http\Request;

class BrokerCompsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locations = Location::all();
        $comps = Comp::paginate(25);
        return view('broker.index',compact('comps','locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locations = Location::pluck('name','id')->all();
        return view('broker.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Comp::create($request->all());
        return redirect('broker/comps');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function show(Comp $comp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function edit(Comp $comp)
    {
        //
        $locations = Location::pluck('name','id')->all();
        return view('broker.edit',compact('comp','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comp $comp)
    {
        //
        $comp->update($request->all());
        return redirect('broker/comps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comp  $comp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comp $comp)
    {
        //
        $comp->delete();
        return redirect('broker/comps');
    }
}
