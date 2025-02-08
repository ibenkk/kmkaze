<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Penjualan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('/landingpage/yield/allproduct-dashboardAdmin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/landingpage/yield/createProduct-dashboarAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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




        Product::create($validation);
        return redirect('/dashboardadmin/product/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return view('/landingpage/yield/detailProduct-dashboarAdmin',['product'=>Product::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('/landingpage/yield/editProduct-dashboarAdmin',['product'=>Product::find($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::where('id_product','=',$id)->delete();
       Product::destroy($id);
       return redirect('/dashboardadmin/product/');
    }

    public function orderProduct(Request $request,string $id){

        $product=Product::find($id);

$cekCustomer=Customer::where('number','=',$request['nomor_telepon'])->where('gmail','=',$request['gmail'])->take(1)->value('number');

if ($cekCustomer) {
    $Customer=Customer::where('number','=',$request['nomor_telepon'])->where('gmail','=',$request['gmail'])->take(1)->get();
  if($Customer[0]->verify==0){
        $data['email']=$Customer[0]->gmail;
        $data['title']="Otp Verification";
        $data['body']="Your Otp Is ".$Customer[0]->otp;

       Mail::send('/Frontend/Testing',['data'=>$data],function($message) use($data){
        $message->to($data['email'])->subject($data['title']);
       });
    return view('Frontend.section.otpVerification',['customer'=>$Customer,'product'=>$product,'data'=>$request]);

  }
  else{
      $totalbayar=$product->product_price*$request['jumlah_item'];

      Penjualan::create(['nomor_telepon'=>$Customer[0]->number,
      'alamat'=>$Customer[0]->alamat,
      'comment'=>$request['comment'],
      'total'=>$totalbayar,
      'sudah_bayar'=>0,
      'id_product'=>$product->id,

    ]);
    $product->total_penjualan+=$request['jumlah_item'];
    $product->save();
return back();
  }

} else {

    $otp=rand(0000,9999);
    Customer::create(
        ['number'=>$request['nomor_telepon'],
        'alamat'=>$request['alamat'],
        'gmail'=>$request['gmail'],
        'otp'=>$otp,
        'verify'=>false,

]);
$Customer=Customer::where('number','=',$request['nomor_telepon'])->where('gmail','=',$request['gmail'])->take(1)->get();
if($Customer[0]->verify==false){
      $data['email']=$Customer[0]->gmail;
      $data['title']="Blast Email";
      $data['body']="Your Otp Is ".$Customer[0]->otp;

     Mail::send('/Frontend/Testing',['data'=>$data],function($message) use($data){
      $message->to($data['email'])->subject($data['title']);
     });}

    return view('Frontend.section.otpVerification',['customer'=>$Customer,'product'=>$product,'data'=>$request]);

}

        $otp=rand(1000,9999);
        $time=time();
        $message=['gall'];
        $data['email']="yosuasollisa@gmail.com";
        $data['title']="Blast Email";
        $data['body']="Your Otp Is ".$otp;

       Mail::send('/Frontend/Testing',['data'=>$data],function($message) use($data){
        $message->to($data['email'])->subject($data['title']);
       });
return back();
    }

    public function verifyOtp(Request $request,string $customerId,string $productId){
      $Customer=Customer::find($customerId);
      $Product=Product::find($productId);

      $totalbayar=$Product->product_price*$request['jumlah_item'];

      if ($Customer->otp==$request['otp']) {
     $Customer->verify=1;
     $Customer->save();
    Penjualan::create(['nomor_telepon'=>$Customer->number,
    'alamat'=>$Customer->alamat,
    'comment'=>$request['comment'],
    'total'=>$totalbayar,
    'sudah_bayar'=>0,
    'id_product'=>$productId,

]);
return redirect('/');
    // $this->orderProduct($request,$productId);
      } else {
      return back();
      }


    }
}
