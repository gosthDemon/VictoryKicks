<?php

namespace App\Http\Livewire\Views;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Sales extends Component
{

    public $search = "";

    public $listeners = [
        'searchProduct' => 'searchProduct',
        'deleteProduct' => 'removeProduct'
    ];
    public function render()
    {
        return view('livewire.views.sales', [
            'products' => $this->getProducts()
        ]);
    }

    public function getProducts()
    {
        $products = DB::table('products')
            ->where('status', '!=', 'Disabled')
            ->where(function ($query) {
                $query->where('code', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('brand', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('colors', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('size', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('qr_code', 'LIKE', '%' . $this->search . '%');
            })
            ->get();
        return $products;
    }

    public function searchProduct($value)
    {
        $this->search = $value;
    }

    public function removeProduct($id)
    {
        DB::Table('products')
            ->where('id', '=', $id)
            ->update(['status'=>'Disabled']);

        $this->getProducts();
    }
}
