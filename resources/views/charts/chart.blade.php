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
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" href="../../../public/css/fontAwesome.css" />
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
            overflow-y: scroll;
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
            font-size: 25px
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

        .content-search-and-button {
            width: 100%;
            display: flex;
            align-items: center;
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
            width: 100%;
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
            color: #29fd53;

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

        .container-chart {
            height: 300px;
            display: flex;
            justify-content: center
        }

        #dona-chart {
            height: 100%;

        }

        .kicks-cards {
            width: 100%;
            margin-top: 20px;
        }

        .kicks-cards .my-card {
            margin-bottom: 10px;
        }

        .kicks-cards .my-card .card-murphy {
            background: yellow;
            height: 70px;
            width: 100%;
            display: flex !important;
            border-radius: 5px;
        }

        .kicks-cards .my-card .card-murphy .icon-card {
            width: 30%;
            height: 100%;
            background: #29fd53;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: var(--clr);
            border-radius: 5px 0px 0px 5px;
        }

        .kicks-cards .my-card .card-murphy .text-card {
            width: 70%;
            height: 100%;
            background: white;
            color: var(--clr);
            border-radius: 0px 5px 5px 0px;
        }

        .kicks-cards .my-card .card-murphy .text-card .title {
            width: 100%;
            height: 20px;
            font-size: 16px;
            text-align: center;
        }

        .kicks-cards .my-card .card-murphy .text-card .value {
            width: 100%;
            height: 20px;
            font-size: 30px;
            text-align: center;
        }
    </style>

<body>
    <div class="parent-container">
        <div class="content" id="records">
            <div class="tittle">Analytics</div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 container-chart">
                        <canvas id="dona-chart"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="lineas-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="kicks-cards" style="padding-bottom:70px;">
                <div class="row gutter">
                    <div class="my-card col-md-3">
                        <div class="card-murphy">
                            <div class="icon-card">
                                <i class="fal fa-shoe-prints"></i>
                            </div>
                            <div class="text-card">
                                <div class="title">Bought slippers</div>
                                <div class="value">{{ $shoes }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-card col-md-3">
                        <div class="card-murphy">
                            <div class="icon-card">
                                <i class="fal fa-store-alt"></i>
                            </div>
                            <div class="text-card">
                                <div class="title">Sold Shoes</div>
                                <div class="value">{{ $shoes_sold }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-card col-md-3">
                        <div class="card-murphy">
                            <div class="icon-card">
                                <i class="fal fa-warehouse-alt"></i>
                            </div>
                            <div class="text-card">
                                <div class="title">Slippers in Stock</div>
                                <div class="value">{{ $shoes_sold_in }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-card col-md-3">
                        <div class="card-murphy">
                            <div class="icon-card">
                                <i class="fal fa-sack-dollar"></i>
                            </div>
                            <div class="text-card">
                                <div class="title">Profits</div>
                                <div class="value">{{ $totalGanado }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="navigation">
                <ul>
                    <li class="list">
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
                    <li class="list active">
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-analytics"></i>
                            </span>
                            <span class="text">
                                Analytics</span>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const list = document.querySelectorAll(".list");
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
        var donaData = {
            labels: ['Investment($us)', 'Profits ($us)'],
            datasets: [{
                data: [{{ $total_compras }}, {{ $totalGanado }}],
                backgroundColor: [
                    '#fff',
                    '#29fd53'
                ]
            }]
        };

        var donaOptions = {
            responsive: true,
            legend: {
                position: 'bottom'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        var donaChart = new Chart(document.getElementById("dona-chart"), {
            type: 'pie',
            data: donaData,
            options: donaOptions
        });

        var lineasData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                'November', 'December'
            ],
            datasets: [{
                label: 'Investment',
                borderColor: '#36A2EB',
                data: [
                    @foreach ($ventasPorMes as $venta)
                        {{ $venta->inversion }},
                    @endforeach
                ]
            }, {
                label: 'Sales',
                borderColor: '#FFCE56',
                data: [
                    @foreach ($ventasPorMes as $venta)
                        {{ $venta->ventas }},
                    @endforeach
                ]
            }]
        };

        var lineasOptions = {
            responsive: true,
            legend: {
                position: 'bottom'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        var lineasChart = new Chart(document.getElementById("lineas-chart"), {
            type: 'line',
            data: lineasData,
            options: lineasOptions
        });
    </script>
    @livewireScripts
</body>

</html>
