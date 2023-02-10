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
                        <div class="col-md-4 show-images">
                            <div class="parent-container-images">
                                <div class="img-container">
                                    <img src="{{ URL::asset($product->qr_image) }}" alt="">
                                </div>
                                <div class="img-container">
                                    <img src="{{ URL::asset($product->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="field">
                            <div class="name">Code:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Buy in:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Minimum Price:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Sale Price:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Brand:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Colors:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Size:</div>
                            <div class="value">{{$product->code}}</div>
                          </div>
                          <div class="field">
                            <div class="name">Description:</div>
                            <div class="value">{{$product->code}}</div>
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
    }

    .show-images .parent-container-images {
        width: 250px;
        padding: 25px;
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
</style>
