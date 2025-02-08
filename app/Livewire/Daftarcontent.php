<?php

namespace App\Livewire;

use App\Models\Penjualan;
use App\Models\Product;
use Livewire\Component;

class Daftarcontent extends Component
{
   public string $id;
   public string $total_penjualan;
    public function mount($id){
       $this->id=$id;
    }
    public function render()
    {
$this->total_penjualan=Penjualan::where('id_product',$this->id)->where('sudah_bayar',1)->get()->count();

        return view('livewire.daftarcontent',[  'products'=>Product::find($this->id),]);
    }
}
