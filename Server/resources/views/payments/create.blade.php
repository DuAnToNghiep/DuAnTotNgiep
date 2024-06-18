<!-- resources/views/payments/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create New Payment')

@section('content')
    <div class="container">
        <h1>Create New Payment</h1>

        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bill_id">Bill ID:</label>
                <input type="number" name="bill_id" id="bill_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_bill">Date Bill:</label>
                <input type="date" name="date_bill" id="date_bill" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <input type="text" name="payment_method" id="payment_method" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="number" name="total_amount" id="total_amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Payment</button>
        </form>
    </div>
@endsection
