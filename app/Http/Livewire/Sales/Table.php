<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $search = "";
    public $product = array();
    public $listeners = [
        'searchSale' => 'searchSale',
        'deleteSale' => 'removeSale'
    ];
    public function searchSale($value)
    {
        $this->search = $value;
    }
    public function removeSale($id)
    {
        try {
            $sale = DB::table('sales')
            ->where('id', $id)
            ->first();

            DB::Table('sales')
                ->where('id', '=', $id)
                ->delete();

            DB::table('products')
            ->where('id','=',$sale->product_id)
            ->update(['status'=>'OnSale']);
    
            $this->getSales();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function render()
    {
        return view('livewire.sales.table', [
            'products' => $this->getSales()
        ]);
    }
    public function getSales()
    {
        $products = DB::table('sales')
            ->join('products', 'products.id', '=', 'sales.product_id')
            ->select('sales.id','sales.created_at','products.name', 'products.buy_price', 'products.sale_price', 'products.minimum_price', 'products.code', 'sales.sold_in', 'products.brand')
            ->where('status', '!=', 'Disabled')
            ->where(function ($query) {
                $query->where('code', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('brand', 'LIKE', '%' . $this->search . '%');
            })
            ->get();
        return $products;
    }
}
