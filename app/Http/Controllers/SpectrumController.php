<?php

namespace App\Http\Controllers;

use App\Spectrum;
use Illuminate\Http\Request;

class SpectrumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spectrums = Spectrum::all();
        return view('spectrum.index', compact('spectrums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spectrum/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spectrums = Spectrum::create($request->all());
        return redirect()->route('spectrum.show', compact('spectrums'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spectrum  $spectrum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spectrums = Spectrum::find($id);
        return view('spectrum.show', compact('spectrums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spectrum  $spectrum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spectrums = Spectrum::findOrFail($id);
        return view('spectrum.edit', compact('spectrums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spectrum  $spectrum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $spectrums = Spectrum::find($id);
        $spectrums->update($request->all());
        return view('spectrum.show', compact('spectrums'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spectrum  $spectrum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spectrum $spectrum)
    {
        //
    }
}
