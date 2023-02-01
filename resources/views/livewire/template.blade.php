<div>
    <div class="parent-container">
    @switch($view)
        @case("layouts.new-shoe")
            @livewire('layouts.new-shoe')
            @break
        @case("layouts.sale-shoe")
            @livewire('layouts.sale-shoe')
            @break
    @endswitch
        <div class="footer">
            <div class="navigation">
                <ul>
                    <li class="list active" wire:ignore>
                        <a href="#"  wire:click="changeView('stats')">
                            <span class="icon">
                                <i class="far fa-home"></i>
                            </span>
                            <span class="text">
                                Home</span>
                        </a>
                    </li>
                    <li class="list" wire:ignore>
                        <a href="#" wire:click="changeView('register')">
                            <span class="icon">
                                <i class="fad fa-edit"></i>
                            </span>
                            <span class="text">
                                Register/Buy</span>
                        </a>
                    </li>
                    <li class="list" wire:ignore>
                        <a href="#" wire:click="changeView('list')">
                            <span class="icon">
                                <i class="fad fa-list"></i>
                            </span>
                            <span class="text">
                                Items</span>
                        </a>
                    </li>
                    <li class="list" wire:ignore>
                        <a href="#" wire:click="changeView('sale-shoe')">
                            <span class="icon">
                                <i class="fad fa-bags-shopping"></i>
                            </span>
                            <span class="text">
                                Sale</span>
                        </a>
                    </li>
                    <li class="list" wire:ignore>
                        <a href="#"  wire:click="changeView('settings')">
                            <span class="icon">
                                <i class="fad fa-cog"></i>
                            </span>
                            <span class="text">
                                Settings</span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            </div>
        </div>
    </div>
</div>
