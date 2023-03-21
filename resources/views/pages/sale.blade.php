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
    <link rel="stylesheet" href="{{ URL::asset('css/fontAwesome.css') }}" />
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

    #records {
        color: white !important;
        font-family: "Orbitron";
        padding: 10px;
        overflow-y: scroll;
    }

    #records .tittle {
        text-align: center;
        padding: 10px;
    }

    #records .content-table {
        overflow-x: scroll;
    }

    th {
        color: #29fd53;
        white-space: nowrap
    }

    .not-wrap {
        white-space: nowrap
    }

    tr {
        color: white
    }

    tr:hover {
        color: white !important;
        background: #ffffff28 !important;
    }

    .search-content {
        margin: 10px 0px 10px 0px;
        background: rgba(0, 0, 255, 0);
        width: 100%;
        display: flex;
        align-items: center;
        border: 2px solid #e1e1e1;
        border-radius: 3px;
    }

    .search-content input {
        width: calc(100% - 60px);
        height: 35px;
        background: #00000000;
        border: none;
        padding-left: 20px;
        color: white;
        outline: none;
    }

    .search-content button {
        background: rgba(255, 0, 0, 0);
        width: 60px;
        font-size: 22px;
        border: none;
        height: 35px;
        color: red;
    }

    .action-button {
        height: 40px;
        width: 40px;
        padding: 5px 10px 5px 10px;
        border-radius: 3px;
        background: white;
        color: var(--clr)
    }

    .action-button:hover {
        padding: 10px 10px 10px 10px;
    }

    .action-button:hover i {
        color: var(--clr);
    }

    .show {
        background: rgba(34, 35, 39, 0.1);
        backdrop-filter: blur(10px) !important;
    }

    .show-button {
        background: #0087d1;
    }

    .edit {
        background: #e1b94f;
    }

    .trash {
        background: #d93c41;
    }

    .pdf {
        background: #d93c41;
    }

    a {
        cursor: pointer;
    }

    /*MODAL*/
    .swal2-modal {
        background: var(--clr) !important;
    }

    .swal2-icon {
        border: solid #29fd53 3px !important;
    }

    .swal2-icon-content {
        color: #29fd53 !important;
    }

    .swal2-title {
        color: white !important;
    }

    .swal2-html-container {
        color: white !important;
    }

    .swal2-confirm {
        color: var(--clr) !important;
    }

    .dropdown-menu {
        background: blue;
        z-index: 9999999999 !important;
    }
</style>

<body>

    <div class="parent-container">
        @livewire('layouts.sale-shoe')
        <!-- Modal -->
        <div class="modal fade" id="newSale" tabindex="-1" aria-labelledby="newSaleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSaleLabel">New Sale</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('sale.save')}}" method="POST">
                            @csrf
                            Are you sure to sell this?
                            <div class="row">
                                <input type="hidden" class="form-control" id="product_id" name="product_id"
                                        value="{{ old('product_id') }}" required>
                                <div class="form-group col-md-12">
                                    <label for="Sold_in">Sold in($us): </label>
                                    <input type="number" step="0.01" class="form-control" id="sold_in" name="sold_in"
                                        value="{{ old('sold_in') }}" required>
                                    @error('sold_in')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br>
                                    <button class="sale-button" style="margin-bottom: 120px;">Sell</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="navigation">
                <ul>
                    <li class="list active">
                        <a href="{{ route('sale') }}">
                            <span class="icon">
                                <i class="far fa-home"></i>
                            </span>
                            <span class="text">
                                Home</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="{{ route('new_home') }}">
                            <span class="icon">
                                <i class="fad fa-edit"></i>
                            </span>
                            <span class="text">
                                Register/Buy</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="{{ route('showProducts') }}">
                            <span class="icon">
                                <i class="fad fa-list"></i>
                            </span>
                            <span class="text">
                                Items</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="{{ route('sales') }}">
                            <span class="icon">
                                <i class="fad fa-bags-shopping"></i>
                            </span>
                            <span class="text">
                                Sales</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="{{route('analytics')}}">
                            <span class="icon">
                                <i class="fad fa-analytics"></i>
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
        let search = document.getElementById('search');

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
            Livewire.emit('searchOneProduct', result);
            scanner.clear();
            $('#contentScanner').modal('hide');
        }

        search.addEventListener('keyup', function(event) {
            Livewire.emit('searchOneProduct', search.value);
        });

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

        function newSale(id){
            document.getElementById('product_id').value = id;
            $("#newSale").modal('show');
        }

        
    </script>
    @yield('scripts')
    @livewireScripts
</body></html>