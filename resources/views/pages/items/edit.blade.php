@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="header">
                        <h4 class="title">Edit Item</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="content">
                        <form action="{{ route('items.update', $item->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="item-name-label">Name</label>
                                        <input type="text" class="form-control border-input" name="name" id="inp_name"
                                            value="{{ $item->name }}" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="item-name-label">Stock Code</label>
                                        <input type="text" class="form-control border-input" name="stock_code" value="{{ $item->stock_code }}"
                                            id="inp_stock_code" placeholder="Stock Code" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="item-name-label">Price</label>
                                        <input type="number" class="form-control border-input" name="price" value="{{ $item->price }}"
                                            id="inp_price" min="0" step="0.01" placeholder="Price" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="item-name-label">Quantity</label>
                                        <input type="number" class="form-control border-input" name="quantity" value="{{ $item->quantity }}"
                                            id="inp_quantity" placeholder="Quantity">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="item-name-label">Model No</label>
                                        <input type="text" class="form-control border-input" name="model_no" value="{{ $item->model_no }}"
                                            id="inp_model_no" placeholder="Model No">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control border-input" name="description"
                                            id="inp_description" placeholder="Here can be your description">{{ $item->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<style>
    .item-name-label {
        font-size: 1rem !important;
        font-weight: 800;
    }

</style>
@endpush
