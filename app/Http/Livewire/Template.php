<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Template extends Component
{
    public $view = "layouts.sale-shoe";
    public function render()
    {
        return view('livewire.template');
    }
    public function changeView($newView){
        $this->view = $newView;
    }
}
