<!-- resources/views/payments/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Payment')

@section('content')
    <div class="container">
        <h1>Edit Payment</h1>

        <form action="{{ route('payments.update', $payment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="bill_id">Bill ID:</label>
                <input type="number" name="bill_id" id="bill_id" class="form-control" value="{{ $payment->bill_id }}" required>
            </div>
            <div class="form-group">
                <label for="date_bill">Date Bill:</label>
                <input type="date" name="date_bill" id="date_bill" class="form-control" value="{{ $payment->date_bill }}" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <input type="text" name="payment_method" id="payment_method" class="form-control" value="{{ $payment->payment_method }}" required>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="number" name="total_amount" id="total_amount" class="form-control" value="{{ $payment->total_amount }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $payment->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $payment->status }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Payment</button>
        </form>
    </div>
@endsection
