
<div class="views">
    <div class="content" id="register">
        <div class="tittle">
            <h2>Shoe Registration Form</h2>
        </div>
        <form action="{{ route('saveProduct') }}" onsubmit="return validateUser()" method="POST" enctype="multipart/form-data" class="row">
            @csrf
            <div class="image-shoe col-md-4">
                <div class="file-upload">
                    <img alt="" src="" id="image_shoe">
                    <label for="selected_image_kicks" class="camera-icon">
                        <i class="fal fa-camera"></i>
                    </label>
                    <input type="file" id="selected_image_kicks" name="image" accept="image/*"
                        style="display:none">
                </div>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form col-md-8">
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="name">Name/Model:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="code">Code:</label>
                        <input type="text" class="form-control" id="code" name="code"
                            value="{{ old('code') }}" required>
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="buy_in">Buy in:</label>
                        <input type="text" class="form-control number" id="buy_in" name="buy_in"
                            value="{{ old('buy_in') }}" required>
                        @error('buy_in')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="minimum_price">Minimum price</label>
                        <input type="text" class="form-control number" id="minimum_price" name="minimum_price"
                            value="{{ old('minimum_price') }}" required>
                        @error('minimum_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sale_price">Sale Price</label>
                        <input type="text" class="form-control number" id="sale_price" name="sale_price"
                            value="{{ old('sale_price') }}" required>
                        @error('sale_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" id="brand"name="brand"
                            value="{{ old('brand') }}" required>
                        @error('brand')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="colors">Colors</label>
                        <input type="text" class="form-control" id="colors" name="colors"
                            value="{{ old('colors') }}" required>
                        @error('colors')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="size">Size</label>
                        <input type="textarea" class="form-control" id="size" name="size"
                            value="{{ old('size') }}" required>
                        @error('size')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" rows="4"
                        cols="50" value="{{ old('description') }}">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="register-button" style="margin-bottom: 120px;">Register</button>
            </div>
        </form>
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

                    this.value = this.value.replace(/[^\d.]/g, "");
                });
            });
        </script>
    </div>
</div>
<style>
    #register {
        color: white;
        font-family: "Orbitron";
        padding: 0px 20px 20px 20px;
    }

    #register .image-shoe {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 300px;
    }

    #image_shoe {
        object-fit: cover;
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
        border-image-outset: 0;
        border-image-source: none
    }

    img[src=""] {
        display: none;
    }

    img:not([src=""])+.camera-icon {
        background-color: #29fd534a;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        width: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
        padding: 50px;
        color: #fff;
    }

    .file-upload {
        position: relative;
        display: flex;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
    }

    #register .camera-icon {
        background-color: #29fd5367;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        width: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
        padding: 50px;
        color: var(--clr);
        border: 5px solid #22232784;
    }

    #register .tittle {
        text-align: center;
        padding: 10px;
    }

    #register .form .register-button {
        margin-top: 20px;
        margin-bottom: 20px;
        background: #29fd53;
        border: none;
        width: 100%;
        padding: 10px;
        font-size: 20px;
    }

    .form-group {
        margin-bottom: 5px
    }

    .text-danger {
        font-size: 10px;
    }
</style>
