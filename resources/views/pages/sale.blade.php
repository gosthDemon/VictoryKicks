<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <title> Victory Kicks</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/fontAwesome.css" />
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/kick.css')}}"> --}}
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap");

    :root {
        --clr: #222327;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 0;
        height: 6px;
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

    .parent-container {
        background: var(--clr);
        display: block;
        height: calc(100vh - 105px);
    }

    .parent-container .template {
        height: 100%;
    }

    .parent-container .views {
        height: 100%;
        overflow: auto;
        padding: 10px
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

    @import url("https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900 &display=swap");
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
body {
    display: block;
    align-items: center;
    justify-content: center;
    background: var(--background);
    width: 100%;
    font-family: "Orbitron";
}

.parent-container {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    background: var(--clr);
    padding: none;
    margin: none;
}
.parent-container .body {
    padding: 20px 20px 120px;
    color: white;
}
.parent-container .body .kicks-card {
    width: 100%;
    min-height: 100%;
    background: var(--clr);
    overflow-y: scroll;
    overflow-x: hidden;
    display: flex;
    padding-bottom: 0;
}
.parent-container .body .kicks-card .banner {
    width: 100%;
    min-height: 100%;
    position: relative;
}
.parent-container .body .kicks-card .banner .tittle-banner {
    font-family: "Orbitron", sans-serif;
    width: 100%;
    text-align: center;
    padding: 5px;
    font-size: 50px;
    font-weight: bold;
    position: absolute;
    z-index: 10;
}
.parent-container .body .kicks-card .banner .content-banner {
    height: 100%;
    width: 100%;
    background-image: url("../img/home/sale-view.png") !important;
    background-size: cover;
}
.parent-container .body .kicks-card .content {
    width: 100%;
    height: 100%;
    padding: 0 15px 15px;
}
@media screen and (max-width: 992px) {
    .parent-container .body .kicks-card .banner{
        
    }
    .parent-container .body .kicks-card {
        flex-direction: column;
        height: auto;
    }
}
.parent-container .body .kicks-card .content .content-search-input {
    width: 100%;
    height: 40px;
    border-radius: 5px;
    position: relative;
    display: flex;
}
.search-input {
    width: calc(100% - 60px); /* para que ocupe el resto del espacio */
    padding-right: 60px; /* para que no tapen el botón */
    height: 100%;
    box-sizing: border-box;
    border-radius: 5px 0 0 5px;
    border: none;
    background: rgba(0, 0, 0, 0);
    border: 1px solid #dfdbd2;
    color: #dfdbd2;
    padding-left: 20px;
    font-size: 17px;
    outline: none;
    font-family: "Orbitron";
}
.content-info-one {
    height: 320px;
    overflow-y: hidden;
    overflow-x: hidden;
}
@media screen and(max-width: 992px) {
    .content-info-one {
        height: fit-content;
    }
}
.content-info-one .row-info-one {
    max-width: 100%;
    margin: 0;
}
.scan-qr {
    width: 60px;
    position: absolute;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    border-radius: 0 5px 5px 0;
    border: 1px solid #dfdbd2;
    border-left: none;
    outline: none;
    background: rgba(255, 255, 255, 0.1);
    color: #dfdbd2;
}
.scan-qr:hover {
    cursor: pointer;
}
.scan-qr i {
    font-size: 25px;
}
.parent-container .body .kicks-card .content .image-qr-content {
    height: 270px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 10px 0;
}
.parent-container .body .kicks-card .content .image-qr-content img {
    height: 250px;
    width: 250px;
}
.parent-container .body .kicks-card .content .info-shoes {
    padding: 10px;
}
.parent-container .body .kicks-card .content .info-shoes .name {
    font-family: "Orbitron";
    font-size: 25px;
    line-height: 1;
    text-align: center;
    padding: 20px 10px 10px;
}
.parent-container .body .kicks-card .content .info-shoes p {
    font-family: "Orbitron";
    line-height: 0.6;
    font-size: 23px;
}
.parent-container .body .kicks-card .content .info-shoes p.sale {
    font-family: "Orbitron";
    font-size: 40px;
}
.parent-container .body .kicks-card .content .info-shoes span {
    font-family: "Orbitron";
    line-height: 0.5;
    font-size: 15px;
}
.parent-container .body .kicks-card .content .info-shoes span.info-text {
    color: #29fd53;
}
.parent-container .body .kicks-card .content .info-shoes .card-info-white {
    background: white;
    color: var(--clr);
    padding: 5px;
    border-radius: 3px;
    height: 180px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.parent-container .body .kicks-card .content .info-shoes .card-info-white .tittle {
    color: var(--clr);
    text-align: center;
    text-transform: uppercase;
    font-family: "Orbitron";
    margin-bottom: 7px;
}
.parent-container .body .kicks-card .content .info-shoes .card-info-white p {
    color: var(--clr);
    text-align: left;
    font-family: "Orbitron";
    font-size: 12px;
    line-height: 1;
    margin-bottom: 10px;
}
.parent-container .body .kicks-card .content .info-shoes .card-info-white p.brand {
    font-size: 17px;
}
.parent-container .body .kicks-card .content .info-shoes .card-info-white p span {
    font-weight: bold;
}
.parent-container .body .kicks-card .content .content-info-two .btn-sale {
    margin-top: 30px;
    width: 100%;
    padding: 10px;
    font-size: 30px;
    font-family: "Orbitron";
    font-weight: bold;
    letter-spacing: 20px;
    text-transform: uppercase;
    border: 3px solid #29fd53;
    background: var(--clr);
    color: #29fd53;
    border-radius: 5px;
    transition: 0.5s;
}
.parent-container .body .kicks-card .content .content-info-two .btn-sale:hover {
    background: var(--clr);
    width: 100%;
    padding: 10px;
    font-size: 30px;
    font-family: "Orbitron";
    font-weight: bold;
    letter-spacing: 20px;
    text-transform: uppercase;
    border: 3px solid #29fd53;
    background: #29fd53;
    border-radius: 5px;
    color: var(--clr);
    transition: 0.5s;
}
/* SCANNER QR */
main {
    display: flex;
    justify-content: center;
    align-items: center;
}
#reader {
    width: 100%;
}
#result {
    text-align: center;
    font-size: 1.5rem;
}
#html5-qrcode-button-launching-camera {
    display: none !important;
}
#html5-qrcode-button-camera-stop {
    display: none !important;
}
    
</style>
<body>

    <div class="parent-container">
        @livewire('layouts.sale-shoe')
        <div class="footer">
            <div class="navigation">
                <ul>
                    <li class="list active">
                        <a href="#">
                            <span class="icon">
                                <i class="far fa-home"></i>
                            </span>
                            <span class="text">
                                Home</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="{{route('new_home')}}">
                            <span class="icon">
                                <i class="fad fa-edit"></i>
                            </span>
                            <span class="text">
                                Register/Buy</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="{{route('showProducts')}}">
                            <span class="icon">
                                <i class="fad fa-list"></i>
                            </span>
                            <span class="text">
                                Items</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="">
                            <span class="icon">
                                <i class="fad fa-bags-shopping"></i>
                            </span>
                            <span class="text">
                                Sale</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_modal">
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
    <div class="modal fade" id="contentScanner" tabindex="-1" aria-labelledby="contentScannerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contentScannerLabel">
                        Modal title
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="main">
                        <div id="reader"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('views.edit')
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="showProduct" tabindex="-1" aria-labelledby="showProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            
                    @livewire('views.show-one')
                
        </div>
    </div>
    <script src="{{ URL::asset('js/html5-qrcode.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const list = document.querySelectorAll(".list");
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
            let search = document.getElementById('search');
            search.value = "";
            search.value = result;
            Livewire.emit('searchProduct', result);
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

        //Delete Product
        function deleteThis(product_id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32c04e',
                cancelButtonColor: '#d93c41',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteProduct', product_id);
                }
            })
        }
        function printThis(product_id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This will download a PDF file with a single record for printing!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32c04e',
                cancelButtonColor: '#d93c41',
                confirmButtonText: 'Yes, print it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "printQrCode/"+product_id;
                }
            })
        }
    </script>
    @yield('scripts')
    @livewireScripts
</body>

</html>
