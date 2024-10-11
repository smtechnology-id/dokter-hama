<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Service Treatment Slip</h1>
                        <form action="{{ route('index') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Customer Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="service">Nomor Surat</label>
                                <input type="text" name="no_surat" value="{{ $kode }}" class="form-control" required>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <h1>Service Treatment Slip</h1>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Service
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                           <table class="table table-borderless">
                                            <tr>
                                                <td>Area</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="area" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="CF">CF / Cold Fogging</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                       <input class="form-check-input" type="radio" name="cf" value="1" id="cf-yes">
                                                       <label class="form-check-label" for="cf-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="cf" value="0" id="cf-no">
                                                        <label class="form-check-label" for="cf-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="HF">HF / Hot Fogging</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                       <input class="form-check-input" type="radio" name="hf" value="1" id="hf-yes">
                                                       <label class="form-check-label" for="hf-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="hf" value="0" id="hf-no">
                                                        <label class="form-check-label" for="hf-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="Spraying">Spraying</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="spraying" value="1" id="spraying-yes">
                                                        <label class="form-check-label" for="spraying-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="spraying" value="0" id="spraying-no">
                                                        <label class="form-check-label" for="spraying-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="B">B / Baiting</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="b" value="1" id="b-yes">
                                                        <label class="form-check-label" for="b-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="b" value="0" id="b-no">
                                                        <label class="form-check-label" for="b-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>   
                                            <tr>
                                                <td><label for="LV">LV / Larvasida</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="lv" value="1" id="lv-yes">
                                                        <label class="form-check-label" for="lv-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="lv" value="0" id="lv-no">
                                                        <label class="form-check-label" for="lv-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="T">T / Trapping</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="t" value="1" id="t-yes">
                                                        <label class="form-check-label" for="t-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="t" value="0" id="t-no">
                                                        <label class="form-check-label" for="t-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other Treatment</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="other_treatment" value="1" id="other-treatment-yes">
                                                        <label class="form-check-label" for="other-treatment-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="other_treatment" value="0" id="other-treatment-no">
                                                        <label class="form-check-label" for="other-treatment-no">Tidak</label>
                                                    </div>
                                                </td>   
                                            </tr>
                                            <tr>
                                                <td>Remark</td>
                                                <td>:</td>
                                                <td>
                                                    <textarea name="remark" rows="3" class="form-control" required></textarea>
                                                </td>
                                            </tr>
                                           </table>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center" style="vertical-align: middle;">
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Area</th>
                                    <th colspan="7">Treatment Type</th>
                                    <th rowspan="2">Remark</th>
                                </tr>
                                <tr class="text-center" style="vertical-align: middle;">
                                    <th>CF</th>
                                    <th>HF</th>
                                    <th>S</th>
                                    <th>B</th>
                                    <th>LV</th>
                                    <th>T</th>
                                    <th>OT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center" style="vertical-align: middle;">
                                    <td>1</td>
                                    <td>Office -> Gudang</td>
                                    <td><button class="btn btn-outline-primary btn-sm"><i class="bi bi-check"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td><button class="btn btn-outline-primary btn-sm"><i class="bi bi-check"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-x"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-x"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-x"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-x"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td><button class="btn btn-outline-primary btn-sm"><i class="bi bi-check"
                                                style="font-size: 1rem;"></i></button></td>
                                    <td>lorem ipsum dolor sit amet</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h1>Service Treatment Slip</h1>
                        <form action="">
                            <div class="form-group">
                                <label for="name">Customer Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>