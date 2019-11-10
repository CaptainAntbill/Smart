<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Brand;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessory = Accessory::all();
        return view('accessory.index', compact('accessory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('accessory.create', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accessories = Accessory::create($request->all());
        return redirect()->route('accessory.show', compact('accessories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accessories = Accessory::find($id);
        return view('accessory.show', compact('accessories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::all();
        $accessories = Accessory::findOrFail($id);
        return view('accessory.edit', compact('accessories', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::all();
        $accessories = Accessory::find($id);
        $accessories->update($request->all());
        return view('accessory.show', compact('accessories', 'brand'));
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        //
    }
}
