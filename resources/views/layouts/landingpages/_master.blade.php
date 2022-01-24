<!doctype html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/responsive.css') }}">
    <title>Pincazh</title>
    <link rel="icon" type="image/png" href="{{ asset('landingpage/img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-outline-custom {
            color: #0d6efd;
            text-decoration: underline;
            }
    </style>

</head>

<body>

    @include('layouts.landingpages.includes._navbar')
    
    @yield('content')

    @include('layouts.landingpages.includes._footer')

    <script src="{{ asset('landingpage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('landingpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/odometer.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('landingpage/js/wow.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Dashboard JS -->
    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";

    </script>
    <!--begin::Global Config(global config for global JS scripts)-->

    <!-- INPUT RANGE PINJAMAN -->

    <script>
        $("#myRange").on("change", function () {
            var val = $(this).val()
            $("#rupiah").val(formatRupiah(val, 'Rp'))
        })
        // var slider = document.getElementById("myRange");
        // var output = document.getElementById("demo");
        // output.innerHTML = slider.value;

        // slider.oninput = function() {
        // output.innerHTML = this.value;
        // }

    </script>

    <!-- END INPUT RANGE PINJAMAN -->

    <!-- FORMAT JUMLAH PINJAMAN -->
    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function (e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
            $('#rupiah').val(this.value)
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

    </script>
    <!-- END FORMAT JUMLAH PINJAMAN -->
</body>
</html>
