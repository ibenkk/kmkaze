<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Menulandingpage extends Component
{
    public function render()
    {
        return view('livewire.menulandingpage',['product'=>Product::where('best_product',1)->get()]);
    }
}
