<?php

namespace App\Http\Livewire\Views;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Http\Livewire\NewTemplate;
use Livewire\WithFileUploads;
class Register extends Component
{

    public function render()
    {
        return view('livewire.views.register');
    }

    public function save()
    {
        DB::beginTransaction();
        try {
            DB::table('products')
                ->insert([
                    'name' => $this->name,
                    'code' => $this->code,
                    'buy_price' => $this->buy_price,
                    'minimum_price' => $this->minimum_price,
                    'sale_price' => $this->sale_price,
                    'qr_code' => "",
                    'qr_image' => "",
                    'image' => "",
                    'brand' => $this->brand,
                    'colors' => $this->colors,
                    'size' => $this->size,
                    'description' => $this->description
                ]);

            DB::commit();
            DD("Se logro");
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }
    }
}
