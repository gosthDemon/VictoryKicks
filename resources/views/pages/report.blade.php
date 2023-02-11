<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<style>
    @font-face {
        font-family: "Orbitron";
        font-style: normal;
        font-weight: normal;
        src: url({{ URL::asset('webfonts/Orbitron/Orbitron-Regular.ttf') }}) format("truetype");
    }

    @font-face {
        font-family: "Orbitron-Bold";
        font-style: normal;
        font-weight: normal;
        src: url({{ URL::asset('webfonts/Orbitron/Orbitron-Bold.ttf') }}) format("truetype");
    }

    .content-cards {
        width: 100%;
        height: 120px;
        display: block;
        white-space: nowrap;
        font-family: 'Orbitron';
    }

    .content-cards .card {
        width: 49%;
        height: 100%;
        display: inline-block;
        padding: 0px;
        margin: 0px;
        vertical-align: top;
        margin-bottom: 10px;
        background: #222327;
        outline: 1px solid #222327;
        color: white !important;
    }

    .content-cards .card .data,
    .content-cards .card .qr-content {
        width: 49%;
        height: 100%;
        display: inline-block;
        padding: 0px;
        margin: 0px;
        vertical-align: top;
    }

    .content-cards .card .data {
        width: 60%;
        padding-left: 5px;
    }

    .content-cards .card .qr-content {
        width: 35%;
    }

    .content-cards .card .data .tittle {
        width: 100%;
        padding-top: 5px;
        font-size: 14px;
        text-transform: uppercase;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .content-cards .card .data .inline-content {
        width: 100%;
        font-size: 12px;
        padding-top: 10px;
        color: #29fd53;
    }

    .content-cards .card .data .inline-content .size {
        width: 30%;
        display: inline-block;
    }

    .content-cards .card .data .inline-content .code {
        width: 68%;
        display: inline-block;
    }

    .content-cards .card .data .inline-content .field {
        font-family: 'Orbitron-Bold';
        font-size: 10px;
        color: white;
    }

    .content-cards .card .data .price {
        width: 100%;
        font-size: 30px;
        text-align: center;
        display: inline-block;
        color: #29fd53;
    }

    .content-cards .card .qr-content img {
        width: 100%;
        height: 90%;
        margin-top: 4%;
    }
</style>

<body>
    <div class="content-cards">
        @foreach ($products as $product)
            <div class="card">
                <div class="data">
                    <div class="tittle">{{ $product->name }}</div>
                    <div class="inline-content">
                        <div class="size"><span class="field">Size:</span> {{ $product->size }}</div>
                        <div class="code"><span class="field">Code:</span> {{ $product->code }}</div>
                    </div>
                    <div class="price">{{ $product->sale_price }} <span style="color:white;">$us</span></div>
                </div>
                <div class="qr-content">
                    <img class="img_qr" src="{{ URL::asset($product->qr_image) }}" alt="">
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
