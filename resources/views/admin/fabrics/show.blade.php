@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <h1>Fabric Details</h1>
    <p>ID: {{ $fabric->id }}</p>
    <p>Fabric: {{ $fabric->fabric }}</p>
    <p>Create Date: {{ $fabric->create_date }}</p>
    <p>Update Date: {{ $fabric->update_date }}</p>
@endsection
