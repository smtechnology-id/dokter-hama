@extends('layouts.app')

@section('active-report', 'active-page')
@section('title', 'Data Service')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Add Data</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No Service</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Print</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->no_service }}</td>
                                    <td>{{ $item->customer_name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <a target="_blank" href="{{ route('service.print', $item->no_service) }}" class="btn btn-primary">Print</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('service.detail', $item->no_service) }}" class="btn btn-primary">Detail</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection