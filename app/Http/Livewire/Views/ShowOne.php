<?php

namespace App\Http\Livewire\Views;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class ShowOne extends Component
{
    protected $listeners = ['getProductShow', 'getProductShow'];
    public $productShow = []; 

    public function render()
    {
        return view('livewire.views.show-one');
    }
    public function getProductShow($product_id){
        $product = DB::table('products')
        ->where('id','=',$product_id)
        ->first();
        $this->productShow[]= $product;
    }
}
