@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">List of Payments</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('payments.create') }}" class="btn btn-primary">Create New Payment</a>
                        </div>

                        <form action="{{ route('payments.search') }}" method="GET" class="form-inline mb-3">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search by bill_id">
                            </div>
                            <button type="submit" class="btn btn-primary ml-2">Search</button>
                        </form>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Bill ID</th>
                                    <th>Date Bill</th>
                                    <th>Payment Method</th>
                                    <th>Total Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->id }}</td>
                                        <td>{{ $payment->bill_id }}</td>
                                        <td>{{ $payment->date_bill }}</td>
                                        <td>{{ $payment->payment_method }}</td>
                                        <td>{{ $payment->total_amount }}</td>
                                        <td>
                                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $payments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
