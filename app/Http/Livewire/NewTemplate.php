<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewTemplate extends Component
{
    public $view = "views.register";
    public $products = array();
    protected $listeners = ['changeView' => 'changeView'];

    public function render()
    {
        return view('livewire.new-template');
    }

    public function changeView($view){
        $this->view = $view;
    }
    public function getProducts(){{
        $this->products = DB::table('products')->get();
    }}
}
