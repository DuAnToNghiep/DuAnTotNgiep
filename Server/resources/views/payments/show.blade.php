<!-- resources/views/payments/show.blade.php -->

@extends('layouts.app')

@section('title', 'Payment Details')

@section('content')
    <div class="container">
        <h1>Payment Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $payment->id }}</td>
                </tr>
                <tr>
                    <th>Bill ID</th>
                    <td>{{ $payment->bill_id }}</td>
                </tr>
                <tr>
                    <th>Date Bill</th>
                    <td>{{ $payment->date_bill }}</td>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <td>{{ $payment->payment_method }}</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>{{ $payment->total_amount }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $payment->description }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $payment->status }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back to Payments</a>
    </div>
@endsection
