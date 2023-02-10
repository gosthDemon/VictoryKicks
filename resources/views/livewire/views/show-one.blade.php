<div class="views">
    @foreach ($productShow as $product)
        @isset($product->name)
            <div class="modal-content">
                <div class="modal-header">
                    <div class="tittle-show">{{ $product->name }}</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="show-product row">
                        <div class="col-lg-4 show-images">
                            <div class="parent-container-images">
                                <div class="img-container">
                                    <img src="{{ URL::asset($product->qr_image) }}" alt="">
                                </div>
                                <div class="img-container">
                                    <img src="{{ URL::asset($product->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="field row">
                                <div class="name col-md-5">Code:</div>
                                <div class="value col-md-7">{{ $product->code }}</div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Buy in:</div>
                                <div class="value col-md-7">{{ $product->buy_price }}<span class="dollar"> $us</span></div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Min Price:</div>
                                <div class="value col-md-7">{{ $product->minimum_price }}<span class="dollar"> $us</span> </div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Sale Price:</div>
                                <div class="value col-md-7">{{ $product->sale_price}}<span class="dollar"> $us</span></div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Brand:</div>
                                <div class="value col-md-7">{{ $product->brand }}</div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Colors:</div>
                                <div class="value col-md-7">{{ $product->colors }}</div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Size:</div>
                                <div class="value col-md-7">{{ $product->size }}</div>
                            </div>
                            <div class="field row">
                                <div class="name col-md-5">Description:</div>
                                <div class="value col-md-7">{{ $product->description }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    @endforeach
</div>
<style>
    .show-images {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tittle-show {
        color: var(--clr);
        font-family: 'Orbitron';
        font-size: 30px;
        width: 100%;
        text-align: center;
        font-weight: bold;
    }

    .show-images .parent-container-images {
        width: 250px;
        padding: 0px 25px 25px 25px;
    }

    .show-images .img-container {
        width: 200px;
        height: 200px;
        float: left;
        overflow: hidden;
        box-shadow: 0px 0px 10px 2px rgba(70, 71, 81, 0.5);
    }

    .show-images .img-container img {
        width: 100%;
        height: 100%;

    }

    .show-images .img-container:first-child {
        margin-bottom: 20px;
    }

    .field {
        display: flex;
        font-size: 30px;
        font-family: 'Orbitron';
    }

    .field .name {
        font-weight: bold;
        text-transform: uppercase;
        text-align: right;
    }
    .field .value .dollar{
      color:#29fd53;
    }

    @media screen and (max-width:768px) {
        .field {
            text-align: center;
        }

        .field .name {
            text-align: center;
        }

        .field .value {
            padding-left: 30px;
        }
    }
</style>
