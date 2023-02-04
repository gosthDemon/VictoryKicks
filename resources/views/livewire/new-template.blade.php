<div class="template">
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
