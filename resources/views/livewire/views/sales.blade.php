<div class="views">
    <div class="content" id="records">
        <div class="tittle">
            <h2>Registered slippers</h2>
        </div>
        <div class="content-search-and-button">
            <div class="search-content">
                <input type="text" wire:ignore wire:model="search" name="search" id="search">
                <button data-toggle="modal" data-target="#contentScanner">
                    <i class="fal fa-qrcode"></i>
                </button>
            </div>
            <div class="content-print-button">
                <a href="/printAll">Print All</a>
            </div>
        </div>
        <div class="content-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Actions</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name/Model</th>
                        <th scope="col">Code</th>
                        <th scope="col">Buy In</th>
                        <th scope="col">Minimum Price</th>
                        <th scope="col">Sale Price</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Description</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="not-wrap">
                                <div class="row">
                                    <div class="col-md-12" style="padding-bottom: 10px;">
                                <a class="action-button show-button" data-toggle="modal" data-target="#showProduct"
                                    wire:click="$emit('getProductShow', { product_id: {{ $product->id }} })"><i
                                        class="far fa-eye"></i></a>
                                <a class="action-button trash" onclick="deleteThis({{ $product->id }})"><i
                                        class="far fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                <a class="action-button edit" data-toggle="modal" data-target="#edit"
                                    wire:click="$emit('getProductEdit', { product_id: {{ $product->id }} })"><i
                                        class="far fa-edit"></i></a>
                                <a class="action-button pdf" onclick="printThis({{ $product->id }})"><i
                                        class="far fa-file-pdf"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td class="not-wrap"><img src="{{URL::asset($product->image)}}" alt="" style="hei
                            120px; width:100px;"></td>
                            <td class="not-wrap">{{ $product->name }}</td>
                            <td>{{ $product->code }}</td>
                            <td class="not-wrap">{{ $product->buy_price }}.00 $us</td>
                            <td class="not-wrap">{{ $product->minimum_price }}.00 $us</td>
                            <td class="not-wrap">{{ $product->sale_price }}.00 $us</td>
                            <td>{{ $product->brand }}</td>
                            <td class="not-wrap">{{ $product->colors }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
