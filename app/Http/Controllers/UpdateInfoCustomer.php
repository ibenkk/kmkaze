<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class UpdateInfoCustomer extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentinfo=Penjualan::where('sudah_bayar',false)->latest('id')->get();

        return view('/landingpage/yield/updateinfo-dashboardAdmin',['paymentinfo'=>$paymentinfo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('landingpage.yield.detailupdateinfo-dashboarAdmin',['paymentinfo'=>Penjualan::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $update=Penjualan::find($id);

     $update->update(['sudah_bayar'=>$request['sudah_bayar']]);

return redirect('/dashboardadmin/updateinfo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
