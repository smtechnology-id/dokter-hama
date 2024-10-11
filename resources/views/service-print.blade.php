<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pace/pace.css') }}" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

</head>

<body style="background-color: #f8f8f8; margin: 0; padding: 0;">
    <div class="container-fluid" style="margin: 0; padding: 0;">
        <div class="row d-flex" style="width: 100%;"> <!-- Menambahkan kelas d-flex -->
            <div class="col-6">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width: 200px; height: 100px;">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('assets/images/barcode.png') }}" alt="logo" style="width: 100px; height: 100px;">
                    </div>
                    <div class="col-6">
                        <h5>CV. Integra Solusi Bersama</h5>
                        <p>Jl. Puspowarno Tengah VIII No. 23 Semarang</p>
                        <table>
                            <tr>
                                <td>No. Telp</td>
                                <td>: 0822-9876-5432</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/main.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
</html>
