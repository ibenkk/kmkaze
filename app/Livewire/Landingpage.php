<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Landingpage extends Component
{
    public string $searching="";
    public $resultSearch;
    public $status;
    public function testing(){

    }

    public function render()
    {
if ($this->searching) {
$this->resultSearch= Product::where('name_product',$this->searching)->orWhere('product_category',$this->searching)-> get();
$this->status= Product::where('name_product','=',$this->searching)->orWhere('product_category',$this->searching)->take(1)->value('name_product');

} else {
    # code...
}

        return view('livewire.landingpage',['product'=>Product::where('best_product',1)->get()]);
    }
}
