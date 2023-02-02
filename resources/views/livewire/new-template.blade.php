<div>
    <button wire:click="changeView('views.home')">Home</button>
    <button wire:click="changeView('views.register')">Register</button>
    <button wire:click="changeView('views.sales')">Sale</button>
    {{$view}}
    @switch ($view) 
        @case ('views.home')
            @livewire('views.home')
            @break
        @case ('views.register')
            @livewire('views.register')
            @break
        @case ('views.sales')
            @livewire('views.sales')
            @break
    @endswitch
</div>
