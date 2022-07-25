@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="header">
                        <h4 class="title">View Item</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="item-name-label">Name :</label>
                                        <span>{{ $item->name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="item-name-label">Stock Code :</label>
                                        <span>{{ $item->stock_code }}</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="item-name-label">Price :</label>
                                        <span>{{ $item->price }}</span>
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
