<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewTemplate extends Component
{
    use WithFileUploads;

    public $view = "views.register";
    protected $listeners = ['changeView' => 'changeView'];
    public $image, $name, $code, $buy_in, $minimum_price, $sale_price, $brand, $colors, $size, $description;
    public function render()
    {
        return view('livewire.new-template');
    }

    public function changeView($view){
        $this->view = $view;
    }
    public function save()
    {
        DB::beginTransaction();
        try {
            DB::table('products')
                ->insert([
                    'name' => $this->name,
                    'code' => $this->code,
                    'buy_price' => $this->buy_in,
                    'minimum_price' => $this->minimum_price,
                    'sale_price' => $this->sale_price,
                    'qr_code' => "",
                    'qr_image' => "",
                    'image' => $this->image->store('photos'),
                    'brand' => $this->brand,
                    'colors' => $this->colors,
                    'size' => $this->size,
                    'description' => $this->description,
                    'created_at' => now(),
                    'updated_at' =>now()
                ]);

            DB::commit();
            DD("Se logro");
        } catch (\Throwable $th) {
            //throw $th;
            DD($th);
            DB::rollBack();
        }
    }
}
