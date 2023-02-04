<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <title> Victory Kicks</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.css') }}" />
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/kick.css') }}"> --}}
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap");
    :root {
        --clr: #222327;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 0;
        height: 0px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #858585;
        border-radius: 3px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgba(65, 65, 65, 0.836);
        border-radius: 3px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
    .parent-container{
        background: var(--clr);
        display: block;
        height: calc(100vh - 105px);
    }
    .parent-container .template{
        height: 100%;
    }
    .parent-container .template .views{
        height: 100%;
        overflow: auto;
    }
    .parent-container .footer {
        flex-shrink: 0;
        height: 106px;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        background: var(--clr);
        display: flex;
        justify-content: right;
        align-items: flex-end;
    }
    .navigation {
        width: 100%;
        height: 70px;
        background: rgb(255, 255, 255);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navigation ul {
        display: flex;
        width: 350px;
        position: relative;
        align-items: center;
        padding: 0;
    }

    .navigation ul li {
        position: relative;
        list-style: none;
        width: 70px;
        height: 70px;
        z-index: 1;
    }

    .navigation ul li a {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
    }

    .navigation ul li a .icon {
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
        color: var(--clr);
    }

    .navigation ul li.active a .icon {
        transform: translateY(-35px);
        transition: 0.5s;
    }

    .navigation ul li a .text {
        position: absolute;
        color: var(--clr);
        opacity: 0;
        font-weight: 400;
        font-size: 0.75em;
        letter-spacing: 0, 5em;
        transition: 0.5s;
    }

    .navigation ul li.active a .text {
        opacity: 1;
        transform: translateY(10px);
    }

    .indicator {
        position: absolute;
        top: -50%;
        left: 0;
        width: 70px;
        height: 70px;
        background: #29fd53;
        border-radius: 50%;
        border: 6px solid var(--clr);
        transition: 0.5s;
    }

    .indicator::before {
        content: "";
        position: absolute;
        top: 64%;
        left: -18px;
        width: 20px;
        height: 20px;
        background: transparent;
        border-top-right-radius: 20px;
        box-shadow: 1px -10px 0 0 var(--clr);
    }

    .indicator::after {
        content: "";
        position: absolute;
        top: 64%;
        left: 56px;
        width: 20px;
        height: 20px;
        background: transparent;
        border-top-left-radius: 22px;
        box-shadow: -1px -10px 0 0 var(--clr);
    }

    .navigation ul li:nth-child(1).active~.indicator {
        transform: translateX(calc(70px * 0));
    }

    .navigation ul li:nth-child(2).active~.indicator {
        transform: translateX(calc(70px * 1));
    }

    .navigation ul li:nth-child(3).active~.indicator {
        transform: translateX(calc(70px * 2));
    }

    .navigation ul li:nth-child(4).active~.indicator {
        transform: translateX(calc(70px * 3));
    }

    .navigation ul li:nth-child(5).active~.indicator {
        transform: translateX(calc(70px * 4));
    }
</style>

<body>

    <div class="parent-container">
            @livewire('new-template')
        <div class="footer">
            <div class="navigation">
                <ul>
                    <li class="list active" onclick="changeView('views.home')">
                        <a href="#">
                            <span class="icon">
                                <i class="far fa-home"></i>
                            </span>
                            <span class="text">
                                Home</span>
                        </a>
                    </li>
                    <li class="list" onclick="changeView('views.register')">
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-edit"></i>
                            </span>
                            <span class="text">
                                Register/Buy</span>
                        </a>
                    </li>
                    <li class="list" onclick="changeView('views.show')">
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-list"></i>
                            </span>
                            <span class="text">
                                Items</span>
                        </a>
                    </li>
                    <li class="list" onclick="changeView('views.sales')">
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-bags-shopping"></i>
                            </span>
                            <span class="text">
                                Sale</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
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

    <script src="{{ URL::asset('js/html5-qrcode.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
        const list = document.querySelectorAll(".list");
        let selectedImage = document.getElementById("selected_image_kicks");
        let image = document.getElementById("image_shoe");
        let boxRender = document.getElementById("reader");
        let scanner;
        if (boxRender) {
            scanner = new Html5QrcodeScanner('reader', {
                qrbox: {
                    width: 250,
                    height: 250
                },
                facingMode: "environment",
                fps: 20
            });
        }
        // QR SCANER
        $('#contentScanner').on('show.bs.modal', function(event) {
            scanner.render(success);
        });
        $('#contentScanner').on('hidden.bs.modal', function(event) {
            scanner.clear();
        });

        function success(result) {
            console.log(result);
            scanner.clear();
            $('#contentScanner').modal('hide');
        }
        // Menu ACTIVE LINK
        function activeLink() {
            list.forEach((item) => {
                item.classList.remove("active");
                this.classList.add("active");
            });
        }
        list.forEach((item) => {
            item.addEventListener("click", activeLink);
        });
        // Selected Image Form
        selectedImage.addEventListener('change', () => {
            if (selectedImage.files.length > 0) {
                var image = selectedImage.files[0];
                var imageURL = URL.createObjectURL(image);
                image_shoe.src = imageURL;
            }
        });

        // TABLE

        $(document).ready(function() {
            $('#example').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [{
                    className: 'dtr-control',
                    orderable: false,
                    targets: 0
                }],
                order: [1, 'asc']
            });
        });

        function changeView(view) {
            Livewire.emit("changeView", view);
        }
    </script>
    @livewireScripts
</body>

</html>
