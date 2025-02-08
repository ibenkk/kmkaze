<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MultiContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kategory)
    {
if ($kategory=="kapas_coil") {

    return view('Frontend/section/daftarcontent',[
        'products'=>Product::where('product_category','Kapas')->orWhere('product_category','Coil')->get(),
    ]);


}
        return view('Frontend/section/daftarcontent',[
            'products'=>Product::where('product_category',$kategory)->get(),
        ]);
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
    public function show(string $kategory,string $id)
    {
return view('Frontend.section.singlecontent',['kategory'=>$kategory,'product'=>Product::find($id)]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
