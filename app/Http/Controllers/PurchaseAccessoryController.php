<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Brand;
use App\Provider;
use App\PurchaseAccessory;
use Illuminate\Http\Request;

class PurchaseAccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessory = Accessory::all();
        $brand = Brand::all();
        $purchases = PurchaseAccessory::all();
        return view('purchase_accessory.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider = Provider::all();
        $accessory = Accessory::all();
        return view('purchase_accessory.create', compact('provider', 'accessory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = Provider::all();
        $accessory = Accessory::all();
        $purchases = PurchaseAccessory::create($request->all());
        return redirect()->route('purchase_accessory.show', compact('purchases'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseAccessory  $purchaseAccessory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchases = PurchaseAccessory::find($id);
        return view('purchase_accessory.show', compact('purchases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseAccessory  $purchaseAccessory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = Provider::all();
        $accessory = Accessory::all();
        $purchase = PurchaseAccessory::findOrFail($id);
        return view('purchase_accessory.edit', compact('provider', 'accessory', 'purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseAccessory  $purchaseAccessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provider = Provider::all();
        $accessory = Accessory::all();
        $purchases = PurchaseAccessory::find($id);
        $purchases->update($request->all());
        return view('purchase_accessory.show', compact('provider', 'accessory', 'purchases'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseAccessory  $purchaseAccessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseAccessory $purchaseAccessory)
    {
        //
    }
}
