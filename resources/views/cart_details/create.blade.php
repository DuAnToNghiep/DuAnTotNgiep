@extends('admin.master')
@section('title', 'Create Cart Detail')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Create Cart Detail</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cart_details.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="cart_id">Cart ID:</label>
                                <input type="text" class="form-control" id="cart_id" name="cart_id">
                            </div>

                            <div class="form-group">
                                <label for="product_id">Product ID:</label>
                                <input type="text" class="form-control" id="product_id" name="product_id">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="text" class="form-control" id="quantity" name="quantity">
                            </div>

                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
