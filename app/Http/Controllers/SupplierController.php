<?php

namespace App\Http\Controllers;

use App\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(supplier::get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return supplier::create($request->all());
    }


    public function edit($id)
    {
      return response()->json(supplier::find($id), 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = supplier::findOrFail($id);
        $supplier->delete();
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
     supplier::whereId($id)->update($request->all());
    }
}
