@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Payment</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('payments.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="bill_id">Bill ID</label>
                                <input id="bill_id" type="number" class="form-control @error('bill_id') is-invalid @enderror" name="bill_id" value="{{ old('bill_id') }}" required autofocus>
                                @error('bill_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_bill">Date Bill</label>
                                <input id="date_bill" type="date" class="form-control @error('date_bill') is-invalid @enderror" name="date_bill" value="{{ old('date_bill') }}" required>
                                @error('date_bill')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="payment_method">Payment Method</label>
                                <input id="payment_method" type="text" class="form-control @error('payment_method') is-invalid @enderror" name="payment_method" value="{{ old('payment_method') }}" required>
                                @error('payment_method')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="total_amount">Total Amount</label>
                                <input id="total_amount" type="number" class="form-control @error('total_amount') is-invalid @enderror" name="total_amount" value="{{ old('total_amount') }}" required>
                                @error('total_amount')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}">
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
