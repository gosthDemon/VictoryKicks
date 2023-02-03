<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewTemplate extends Component
{

    public $view = "views.sales";
    protected $listeners = ['changeView' => 'changeView'];
    public function render()
    {
        return view('livewire.new-template');
    }
    
    public function changeView($view){
        $this->view = $view;
    }

}
