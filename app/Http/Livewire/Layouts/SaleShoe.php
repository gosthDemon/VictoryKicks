<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class SaleShoe extends Component
{
    public $listeners = ['searchOneProduct','searchOneProduct'];
    public $product = [];
    public function render()
    {
        return view('livewire.layouts.sale-shoe');
    }
    public function searchOneProduct($code_bar){
        $my_product = DB::Table('products')->where('qr_code',$code_bar)->limit(1)->get();
        if (!empty($my_product)) {
            $this->product = $my_product;
        }
    }
}
