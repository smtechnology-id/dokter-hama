@extends('layouts.app')

@section('active-report', 'active-page')
@section('title', 'Treatment Service Detail')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Detail Treatment Service</h5>

                    <table class="table table-bordered">
                        <tr>
                            <th>No Service</th>
                            <td>{{ $service->no_service }}</td>
                        </tr>
                        <tr>
                            <th>Customer Name</th>
                            <td>{{ $service->customer_name }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $service->address }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $service->phone }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Input Service Treatment Slip</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Service
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('service.detail.store') }}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td>Area <span class="text-danger">*</span></td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="area" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sub Area</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="sub_area" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="CF">CF / Cold Fogging <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_cf"
                                                            value="1" id="cf-yes" required>
                                                        <label class="form-check-label" for="cf-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_cf"
                                                            value="0" id="cf-no" required>
                                                        <label class="form-check-label" for="cf-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="HF">HF / Hot Fogging <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_hf"
                                                            value="1" id="hf-yes" required>
                                                        <label class="form-check-label" for="hf-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_hf"
                                                            value="0" id="hf-no" required>
                                                        <label class="form-check-label" for="hf-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="Spraying">Spraying <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_s"
                                                            value="1" id="spraying-yes" required>
                                                        <label class="form-check-label" for="spraying-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_s"
                                                            value="0" id="spraying-no" required>
                                                        <label class="form-check-label" for="spraying-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="B">B / Baiting <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_b"
                                                            value="1" id="b-yes" required>
                                                        <label class="form-check-label" for="b-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_b"
                                                            value="0" id="b-no" required>
                                                        <label class="form-check-label" for="b-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="LV">LV / Larvasida <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_lv"
                                                            value="1" id="lv-yes" required>
                                                        <label class="form-check-label" for="lv-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_lv"
                                                            value="0" id="lv-no" required>
                                                        <label class="form-check-label" for="lv-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="T">T / Trapping <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_t"
                                                            value="1" id="t-yes" required>
                                                        <label class="form-check-label" for="t-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_t"
                                                            value="0" id="t-no" required>
                                                        <label class="form-check-label" for="t-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="OT">OT / Other Treatment <span
                                                            class="text-danger">*</span></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_ot"
                                                            value="1" id="ot-yes" required>
                                                        <label class="form-check-label" for="ot-yes">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tp_ot"
                                                            value="0" id="ot-no" required>
                                                        <label class="form-check-label" for="ot-no">Tidak</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="ai">AI</label></td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="ai" class="form-control">
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center" style="vertical-align: middle;">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Area</th>
                                <th colspan="7">Treatment Type</th>
                                <th rowspan="2">AI</th>
                                <th rowspan="2">Remark</th>
                                <th rowspan="2">Action</th>
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
                            @foreach ($serviceDetail as $item)
                                <tr class="text-center" style="vertical-align: middle;">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $item->area }}
                                        @if ($item->sub_area)
                                            -> {{ $item->sub_area }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_cf == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_hf == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_s == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_b == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_lv == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_t == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tp_ot == 1)
                                            <button
                                                class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                                                <i class="material-icons">check</i>
                                            </button>
                                        @else
                                            <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                                <i class="material-icons">close</i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $item->ai }}
                                    </td>

                                    <td>{{ $item->remark }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id }}">
                                            <i class="material-icons">edit</i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('service.detail.update') }}" method="post">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Treatment
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <div class="modal-body">
                                                            <table class="table table-borderless">
                                                                <tr>
                                                                    <td>Area <span class="text-danger">*</span></td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" name="area"
                                                                            class="form-control" required
                                                                            value="{{ $item->area }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sub Area</td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" name="sub_area"
                                                                            class="form-control"
                                                                            value="{{ $item->sub_area }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="CF">CF / Cold Fogging <span
                                                                                class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_cf" value="1"
                                                                                id="cf-yes" required
                                                                                {{ $item->tp_cf == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="cf-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_cf" value="0"
                                                                                id="cf-no" required
                                                                                {{ $item->tp_cf == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="cf-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="HF">HF / Hot Fogging <span
                                                                                class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_hf" value="1"
                                                                                id="hf-yes" required
                                                                                {{ $item->tp_hf == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="hf-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_hf" value="0"
                                                                                id="hf-no" required
                                                                                {{ $item->tp_hf == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="hf-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="Spraying">Spraying <span
                                                                                class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_s" value="1"
                                                                                id="spraying-yes" required
                                                                                {{ $item->tp_s == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="spraying-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_s" value="0"
                                                                                id="spraying-no" required
                                                                                {{ $item->tp_s == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="spraying-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="B">B / Baiting <span
                                                                                class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_b" value="1"
                                                                                id="b-yes" required
                                                                                {{ $item->tp_b == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="b-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_b" value="0"
                                                                                id="b-no" required
                                                                                {{ $item->tp_b == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="b-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="LV">LV / Larvasida <span
                                                                                class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_lv" value="1"
                                                                                id="lv-yes" required
                                                                                {{ $item->tp_lv == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="lv-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_lv" value="0"
                                                                                id="lv-no" required
                                                                                {{ $item->tp_lv == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="lv-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="T">T / Trapping <span
                                                                                class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_t" value="1"
                                                                                id="t-yes" required
                                                                                {{ $item->tp_t == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="t-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_t" value="0"
                                                                                id="t-no" required
                                                                                {{ $item->tp_t == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="t-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="OT">OT / Other Treatment
                                                                            <span class="text-danger">*</span></label>
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_ot" value="1"
                                                                                id="ot-yes" required
                                                                                {{ $item->tp_ot == 1 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="ot-yes">Ya</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="tp_ot" value="0"
                                                                                id="ot-no" required
                                                                                {{ $item->tp_ot == 0 ? 'checked' : '' }}>
                                                                            <label class="form-check-label"
                                                                                for="ot-no">Tidak</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="ai">AI</label></td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" name="ai"
                                                                            class="form-control"
                                                                            value="{{ $item->ai }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Remark</td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <textarea name="remark" rows="3" class="form-control" required>{{ $item->remark }}</textarea>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Treatment
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <div class="modal-body">
                                                            <p>Are you sure want to delete this data?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('service.detail.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                                        </div>
                                           
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Additional Data Treatment</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.additional.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <div class="form-group mb-3">
                                    <label for="active_ingredient">Active Ingredient</label>
                                    <textarea name="active_ingredient" rows="3" class="form-control" placeholder="Active Ingredient">{{ $service->active_ingredient }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="dosage">Dosage</label>
                                    <textarea name="dosage" rows="3" class="form-control" placeholder="Dosage / CONCENTRATE">{{ $service->dosage }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="usage">Usage</label>
                                    <textarea name="usage" rows="3" class="form-control" placeholder="Usage">{{ $service->usage }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="note">Note</label>
                                    <textarea name="note" rows="3" class="form-control" placeholder="Note / Remark">{{ $service->note }}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="timein">Time In</label>
                                    <input type="time" name="timein" class="form-control" value="{{ \Carbon\Carbon::parse($service->timein)->format('H:i') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="timeout">Time Out</label>
                                    <input type="time" name="timeout" class="form-control" required value="{{ \Carbon\Carbon::parse($service->timeout)->format('H:i') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="recomendation_from_client">Recomendation From Client</label>
                                    <textarea name="recomendation_from_client" rows="3" class="form-control" placeholder="Recomendation From Client">{{ $service->recomendation_from_client }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="advice_from_client">Advice From Client</label>
                                    <textarea name="advice_from_client" rows="3" class="form-control" placeholder="Advice From Client">{{ $service->advice_from_client }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="ttd_from_admin" class="form-label">Tanda Tangan Admin</label>
                                    <div class="col-md-12 border p-3 rounded" style="background-color: #f8f9fa;">
                                        <label class="form-label">Signature:</label>
                                        <br/>
                                        <div id="sig" class="border" style="height: 150px; border: 1px dashed #6c757d;"></div>
                                        <br/><br/>
                                        <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                                        <textarea id="signature" name="ttd_from_admin" style="display: none"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="ttd_from_client" class="form-label">Tanda Tangan Client</label>
                                    <div class="col-md-12 border p-3 rounded" style="background-color: #f8f9fa;">
                                        <label class="form-label">Signature:</label>
                                        <br/>
                                        <div id="sig2" class="border" style="height: 150px; border: 1px dashed #6c757d;"></div>
                                        <br/><br/>
                                        <button id="clear2" class="btn btn-danger btn-sm">Clear</button>
                                        <textarea id="signature2" name="ttd_from_client" style="display: none"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
    $('#clear').click(function (e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature").val('');
    });
    var sig2 = $('#sig2').signature({syncField: '#signature2', syncFormat: 'PNG'});
    $('#clear2').click(function (e) {
        e.preventDefault();
        sig2.signature('clear');
        $("#signature2").val('');
    });
</script>
@endsection

