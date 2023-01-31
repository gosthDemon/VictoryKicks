<div>
    
    <div class="parent-container">
        <div class="body">
            <div class="kicks-card">
                <div class="banner">
                    <div class="tittle-banner">VICTORY KICKS</div>
                    <div class="content-banner"></div>
                </div>
                <div class="content">
                    <div class="content-search-input">
                        <input type="text" name="search" id="search" class="search-input" placeholder="Search..." />
                        <button class="scan-qr" data-toggle="modal" data-target="#contentScanner">
                            <i class="fad fa-qrcode"></i>
                        </button>
                    </div>
                    <div class="content-info-one">
                        <div class="row row-info-one">
                            <div class="image-qr-content col-md-6">
                                <img src="{{URL::asset("img/temp/download.png")}}" alt="" />
                            </div>
                            <div class="info-shoes col-md-6">
                                <div class="name">
                                    Air Jordan 1 Chicago Reimagined
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-6">
                                        <span class="info-text">Buy</span>
                                        <p>50</p>
                                        <span class="info-text">Minimum</span>
                                        <p>95</p>
                                        <span class="info-text">Sale</span>
                                        <p class="sale">100</p>
                                    </div>
                                    <div class="col-6 card-info-white">
                                        <div class="tittle">Details</div>
                                        <p class="brand">
                                            <span>Brand:</span>
                                            NIKE
                                        </p>
                                        <p>
                                            <span>Model:</span>
                                            Air Jordan Air Force 1 Magazine
                                        </p>
                                        <p>
                                            <span>ID:</span>6666699694
                                        </p>
                                        <p>
                                            <span>Size:</span>
                                            M
                                        </p>
                                        <p>
                                            <span>Color:</span>
                                            Red
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="modal fade" id="contentScanner" tabindex="-1" aria-labelledby="contentScannerLabel"
                        aria-hidden="true">
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
                                        <div id="result"></div>
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
                    <div class="content-info-two">
                        <button class="btn-sale">Sale</button>
                    </div>
                </div>
            </div>
        </div>
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
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-edit"></i>
                            </span>
                            <span class="text">
                                Register</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-list"></i>
                            </span>
                            <span class="text">
                                Items</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon">
                                <i class="fad fa-bags-shopping"></i>
                            </span>
                            <span class="text">
                                Buy/Sale</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
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
</div>
