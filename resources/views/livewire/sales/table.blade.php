<div>
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
        </div>
        <div class="content-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Name/Model</th>
                        <th scope="col">Sold in</th>
                        <th scope="col">Buy In</th>
                        <th scope="col">Minimum Price</th>
                        <th scope="col">Sale Price</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->code }}</td>
                            <td class="not-wrap">{{ $product->name }}</td>
                            <td class="not-wrap">{{ $product->sold_in }} $us</td>
                            <td class="not-wrap">{{ $product->buy_price }} $us</td>
                            <td class="not-wrap">{{ $product->minimum_price }} $us</td>
                            <td class="not-wrap">{{ $product->sale_price }} $us</td>
                            <td>{{ $product->brand }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td class="not-wrap">
                                <a class="action-button trash" onclick="deleteThis({{ $product->id }})"><i
                                        class="far fa-trash"></i></a>
                            </td>   
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
