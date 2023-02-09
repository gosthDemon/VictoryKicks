<?php

namespace App\Http\Livewire\Views;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Sales extends Component
{
    
    public $search ="";

    public $listeners = [
        'searchProduct' => 'searchForProduct',
        'deleteProduct' => 'removeProduct'
    ];
    public function render()
    {
        return view('livewire.views.sales',[
            'products'=>$this->getProducts()
        ]);
    }

    public function getProducts(){
        $products =  DB::table('products')
        ->where('estatus','=',1)
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

    public function removeProduct($id){
        DB::Table('products')
        ->where('id','=',$id)
        ->update(['estatus','=',0]);

        $this->getProducts();
    }

}
