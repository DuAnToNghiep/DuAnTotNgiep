<!-- resources/views/payments/index.blade.php -->

@extends('layouts.app')

@section('title', 'Payments List')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h1>Payments List</h1>
            </div>
            <div class="col text-right">
                <a href="{{ route('payments.create') }}" class="btn btn-primary">Create New Payment</a>
            </div>
        </div>

        @if ($payments->isEmpty())
            <p>No payments found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bill ID</th>
                        <th>Date Bill</th>
                        <th>Payment Method</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
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
                            <td>{{ $payment->status }}</td>
                            <td>
                                <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $payments->links() }}
        @endif
    </div>
@endsection
