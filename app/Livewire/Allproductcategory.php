<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Allproductcategory extends Component
{
    public string $category="All";
public function cekCategory(){

}
    public function render()
    {if ($this->category=='All') {

        return view('livewire.allproductcategory',['products'=> Product::all()]);
    }
        return view('livewire.allproductcategory',['products'=> Product::where('product_category',$this->category)->get()]);
    }
}
