<?php

namespace App\Http\Controllers;
use App\Spectrum;
use App\Phone;
use App\Brand;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = Phone::all();
        return view('phone.index', compact('phone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spectrum = Spectrum::all();
        $brand = Brand::all();
        return view ('phone.create', compact('spectrum','brand'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phones = Phone::create($request->all());
        return redirect()->route('phone.show', compact('phones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spectrum = Spectrum::all();
        $brand = Brand::all();
        $phones = Phone::find($id);
        return view('phone.show', compact('phones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $phones = Phone::findOrFail($id);
        return view('phone.edit', compact('phones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $spectrum = Spectrum::all();
        $brand = Brand::all();
        $phones = Phone::find($id);
        $phones->update($request->all());
        return view('phone.show', compact('phones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
