<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <title> Victory Kicks</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset("css/fontawesome.css")}}"/>
        <link rel="stylesheet" href="{{URL::asset("css/kick.css")}}">
        @livewireStyles
    </head>

    <body>
        @livewire('template')
        @livewireScripts

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ=="></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        const list = document.querySelectorAll(".list");
        let selectedImage = document.getElementById("selected_image_kicks");
        let boxRender = document.getElementById("render");
        let image = document.getElementById("image_shoe");
        if (boxRender) {
            let scanner = new Html5QrcodeScanner('reader', {
                qrbox: {
                    width: 250,
                    height: 250
                },
                facingMode: "environment",
                fps: 20
            });
        }
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
        // QR SCANER
        $('#contentScanner').on('show.bs.modal', function (event) {
            scanner.render(success);
        });
        $('#contentScanner').on('hidden.bs.modal', function (event) {
            scanner.clear();
        });
        function success(result) {
            console.log(result);
            scanner.clear();
            $('#contentScanner').modal('hide');
        }
        // Selected Image Form
        selectedImage.addEventListener('change', () => {
            if (selectedImage.files.length > 0) {
                var image = selectedImage.files[0];
                var imageURL = URL.createObjectURL(image);
                image_shoe.src = imageURL;
            }
        });

        // TABLE

        $(document).ready(function () {
            $('#example').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [
                    {
                        className: 'dtr-control',
                        orderable: false,
                        targets: 0
                    }
                ],
                order: [1, 'asc']
            });
        });
    </script>
    </body>
</html>
