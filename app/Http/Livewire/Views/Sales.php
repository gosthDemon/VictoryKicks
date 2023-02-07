<?php

namespace App\Http\Livewire\Views;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Sales extends Component
{
    
    public $search ="";

    public $listeners = ['searchProduct', 'searchProduct'];
    public function render()
    {
        return view('livewire.views.sales',[
            'products'=>$this->getProducts()
        ]);
    }

    public function getProducts(){
        $products =  DB::table('products')
        ->where('code','LIKE','%'.$this->search.'%')
        ->orwhere('name','LIKE','%'.$this->search.'%')
        ->orwhere('brand','LIKE','%'.$this->search.'%')
        ->orwhere('colors','LIKE','%'.$this->search.'%')
        ->orwhere('size','LIKE','%'.$this->search.'%')
        ->orwhere('qr_code','LIKE','%'.$this->search.'%')
        ->get();

        return $products;
    }
    public function searchProduct($value){
        $this->search = $value;
    }

}
