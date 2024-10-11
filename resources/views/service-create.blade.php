@extends('layouts.app')
@section('active-report', 'active-page')
@section('title', 'Create Service')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Customer Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <textarea name="address" rows="3" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="service">Nomor Service</label>
                            <input type="text" name="no_service" value="{{ $kode }}" class="form-control" required readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection