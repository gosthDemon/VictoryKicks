
<div class="views">
    <div class="content" id="records">
        <div class="tittle">
            <h2>Registered slippers</h2>
        </div>
        <div class="search-content">
            <input type="text" wire:model="search" name="search" id="search">
            <button data-toggle="modal" data-target="#contentScanner">
                <i class="fal fa-qrcode"></i>
            </button>            
        </div>
        <div class="content-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Name/Model</th>
                        <th scope="col">Buy In</th>
                        <th scope="col">Minimum Price</th>
                        <th scope="col">Sale Price</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forEach($products as $product)
                    <tr>
                        <td>{{$product->code}}</td>
                        <td class="not-wrap">{{$product->name}}</td>
                        <td class="not-wrap">{{$product->buy_price}}.00 $us</td>
                        <td class="not-wrap">{{$product->minimum_price}}.00 $us</td>
                        <td class="not-wrap">{{$product->sale_price}}.00 $us</td>
                        <td>{{$product->brand}}</td>
                        <td class="not-wrap">{{$product->colors}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->description}}</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr><tr>
                        <td>123456</td>
                        <td class="not-wrap">Air Force Jordan 1</td>
                        <td class="not-wrap">234.00 $us</td>
                        <td class="not-wrap">345.00 $us</td>
                        <td class="not-wrap">545.00 $us</td>
                        <td>nike</td>
                        <td class="not-wrap">red</td>
                        <td>m</td>
                        <td>not have description</td>
                        <td class="not-wrap">
                            <a href="" class="action-button show"><i class="far fa-eye"></i></a>
                            <a href="" class="action-button edit"><i class="far fa-edit"></i></a>
                            <a href="" class="action-button trash"><i class="far fa-trash"></i></a>
                            <a href="" class="action-button pdf"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
