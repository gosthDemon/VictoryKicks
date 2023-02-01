<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
</head>
<body>
    <button wire:click="changeView('views.home')">Home</button>
    <button wire:click="changeView('views.register')">Register</button>
    <button wire:click="changeView('views.sale')">Sale</button>

    <div class="my_content">
        
        @livewire('new-template')
    </div>
</body>
</html>