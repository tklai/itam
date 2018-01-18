@extends('layouts.form')

@section('title', 'Add Vendor')
@section('category', 'vendor')
@section('returnPage', route('vendor.index'))

@section('form')
    <div class="form-group">
        <label class="control-label" for="name">Company Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label class="control-label" for="address">Address</label>
        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
    </div>
    <div class="form-group">
        <label class="control-label" for="phone">Phone Number</label>
        <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
    </div>
@endsection
