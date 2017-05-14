<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrintersCreateRequest;
use App\Location;
use App\Printer;
use Illuminate\Http\Request;

class AdminPrintersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $printers = Printer::all();//->sortBy('location_id');
        return view('admin.printers.index',compact('printers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locations = Location::orderBy('name')->pluck('name','id')->all();
        return view('admin.printers.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrintersCreateRequest $request)
    {
        //
//        dd($request->all());

        $input = $request->all();
        if ($file = $request->file('path')){
            $name = time().$file->getClientOriginalName();
            $input['path'] = $name;
            $file->move('driver',$name);
        }
//        return $input;
        Printer::create($input);
        return redirect('admin/printers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function show(Printer $printer)
    {
        //
        return view('admin.printers.show',compact('printer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function edit(Printer $printer)
    {
        //
        $locations = Location::pluck('name','id')->all();
        return view('admin.printers.edit',compact('printer','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Printer $printer)
    {
        //
//        dd($request->all());
        $input = $request->all();
        if ($file = $request->file('path')){
//            unlink($printer->path);
            $name = time().$file->getClientOriginalName();
            $input['path'] = $name;
            $file->move('driver',$name);

        }else{
            $input = $request->except('path');
        }

        $printer->update($input);
        return redirect('admin/printers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Printer $printer)
    {
        //
        $printer->delete();
        return redirect('admin/printers');
    }

    public function trashed(){
        $printers = Printer::onlyTrashed()->get();
        return view('admin.printers.trash',compact('printers'));
    }
    public function restore($id){
        Printer::onlyTrashed()->whereId($id)->restore();
        return redirect('admin/printers');
    }
}
