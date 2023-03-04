<div class="views">
    <div class="content" id="register">
        <div class="title">
            <h2>Shoe Registration Form</h2>
        </div>
        <div class="row">
            <div class="image-shoe col-0 col-lg-5">
                <img src="{{ URL::asset('img/home/sale-view.png') }}" alt="">
            </div>
            <div class="form col-0 col-lg-7 p-4">
                <div class="content-search">
                    <input type="text" id="search">
                    <i class="fas fa-qrcode" data-toggle="modal" data-target="#contentScanner"></i>
                </div>
                <div class="info-product">
                    @foreach ($product as $item)
                        <div class="name-shoe">
                            {{ $item->name }}
                        </div>
                        <div class="content-img">
                            <img src="{{ URL::asset($item->image) }}" alt="">
                        </div>
                        <div class="data row">
                            <div class="field col-md-6">
                                <div class="label">Code: </div>
                                <div class="value">&nbsp;{{ $item->code }}</div>
                            </div>
                            <div class="field col-md-6">
                                <div class="label">Brand: </div>
                                <div class="value">&nbsp; {{ $item->brand }}</div>
                            </div>
                            <div class="field col-md-4">
                                <div class="label">Buy Price: </div>
                                <div class="value">&nbsp; {{ $item->buy_price }}$us</div>
                            </div>
                            <div class="field col-md-4">
                                <div class="label">Min. Price: </div>
                                <div class="value">&nbsp; {{ $item->minimum_price }}$us</div>
                            </div>
                            <div class="field col-md-4">
                                <div class="label">Sale Price: </div>
                                <div class="value">&nbsp; {{ $item->sale_price }}$us</div>
                            </div>
                            <div class="field col-md-4">
                                <div class="label">Size: </div>
                                <div class="value">&nbsp; {{ $item->size }}</div>
                            </div>
                            <div class="field col-md-4">
                                <div class="label">Color: </div>
                                <div class="value">&nbsp; {{ $item->colors }}</div>
                            </div>
                            <div class="field col-md-4">
                                <div class="label">Status: </div>
                                <div class="value">&nbsp; {{ $item->status }}</div>
                            </div>
                            <div class="field col-md-12">
                                <div class="label">Description: </div>
                                <div class="value description"> Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Omnis quaerat ad blanditiis repellat impedit nam quisquam accusamus totam quae
                                    debitis! </div>
                            </div>
                        </div>
                        @if ($item->status == 'OnSale')
                            <button class="sale-button" onclick="newSale({{$item->id}})">SHOE SALESMAN</button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <script>
            let selectedImage = document.getElementById("selected_image_kicks");
            let image_shoe = document.getElementById("image_shoe");

            selectedImage.addEventListener('change', () => {
                if (selectedImage.files.length > 0) {
                    var image = selectedImage.files[0];
                    var imageURL = URL.createObjectURL(image);
                    image_shoe.src = imageURL;
                }
            });
            let inputs = document.querySelectorAll(".number");

            inputs.forEach(input => {
                input.addEventListener("input", function() {

                    if (input.value.length > 5) {
                        input.value = input.value.slice(0, 12);
                    }

                    this.value = this.value.replace(/[^\d]/g, "") + " $us";
                });
            });
            
        </script>
    </div>
</div>
<style>
    .image-shoe img {
        width: 100%;
        object-fit: cover;
    }

    @media (max-width: 991.98px) {
        .image-shoe img {
            display: none;
        }
    }

    #register .title {
        color: white;
        font-family: 'Orbitron';
        text-align: center;
        padding: 10px;
    }

    .content-search {
        width: 100%;
        background: white;
        display: flex;
        align-items: center;

    }

    .content-search input {
        width: calc(100% - 60px);
        border: none;
        outline: none;
        padding-left: 10px;
    }

    .content-search i {
        width: 60px;
        background: #29fd53;
        text-align: center;
        font-size: 25px;
        padding: 2px;
        cursor: pointer;
    }

    .info-product {
        padding: 20px 5px 5px 5px;
        width: 100%;
    }

    .info-product .name-shoe {
        width: 100%;
        font-size: 25px;
        text-align: center;
        font-family: 'Orbitron';
        color: white;
    }

    .info-product .content-img {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 10px 0px;
    }

    .info-product .content-img img {
        width: 80%;
        height: 300px;
        object-fit: cover;

    }

    .info-product .data {
        color: white
    }

    .info-product .data .field {
        display: flex;
        align-items: center;
        padding: 10px 0px;
    }

    .info-product .data .field .label {
        color: #29fd53;
        font-size: 16px
    }

    .info-product .data .field .value {
        font-size: 24px
    }

    .info-product .data .field .description {
        font-size: 16px;
        padding-left: 10px;
    }

    .sale-button {
        width: 100%;
        padding: 10px;
        font-size: 25px;
        background: none;
        border: 2px solid #29fd53;
        color: #29fd53;
        border-radius: 5px;
        transition: .4s;
        font-family: 'Orbitron'
    }

    .sale-button:hover {
        background: #29fd53;
        border: 2px solid #29fd53;
        color: var(--clr);
        transition: .4s;
    }
</style>
