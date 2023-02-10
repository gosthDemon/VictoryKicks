<?php

namespace App\Http\Livewire\Views;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Edit extends Component
{
    protected $listeners = ['getProductEdit', 'getProductEdit'];
    public $productEdit = []; 

    public function render()
    {
        return view('livewire.views.edit');
    }
    public function getProductEdit($product_id){
        $product = DB::table('products')
        ->where('id','=',$product_id)
        ->first();
        $this->productEdit[] = $product;
    }
}
