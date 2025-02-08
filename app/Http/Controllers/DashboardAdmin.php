<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $profit=0;
    $index=0;

    $penjualan=Penjualan::latest('created_at')->get();

    foreach ($penjualan as $item ) {

    $profit+=$penjualan[$index]->product->product_price;
    $index++;
}
        return view('/landingpage/yield/landingpage-dashboarAdmin',['penjualan'=>Penjualan::latest('id')->get(),'profit'=>$profit]);
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
        //MENAMPILKAN PENJUALAN

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //EDIT PENJUALAN

        return view('/landingpage/yield/editlandingpage-dashboarAdmin',['penjualan'=>Penjualan::where('id',$id)->get()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_product=Product::find($id);
        $rules=[
            'name_product'=>'required',
            'product_description'=>'required',

            'product_category'=>'required',
            'best_product'=>'required',
            'product_price'=>'required',
            'product_stock'=>'required',
            'product_picture'=>'image|mimes:jpg,png,jpeg|file|max:2024',
        ];
            $validation=$request->validate($rules);
            if ($request->file('product_picture')){
            $fotoupload=$request->file('product_picture');
            $extension=$fotoupload->extension();
            $final=date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto/product'),$final);
            $validation['product_picture']=$final;
        }



        $update_product->update($validation);
        return redirect('/dashboardadmin/product/');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

       Penjualan::destroy($id);
       return redirect('/dashboardadmin/updateinfo');
    }

    public function updatepayment(Request $request, string $id){
$product=Penjualan::find($id);


$validation=$request->validate([
    'nomor_telepon'=>'required',
    'sudah_bayar'=>'required',
    'alamat'=>'required',
]);
$product->update($validation);
return redirect('/dashboardadmin');
    }
}
