@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="header">
                        <h4 class="title">New Invoice</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="content">
                        <form action="{{ route('invoice.create') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="item-name-label">Item</label>
                                        <select name="items_id" id="item_id" class="form-control item-select">
                                            <option value="">Select Item</option>
                                            @foreach($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="item-name-label">Stock Code</label>
                                        <input type="text" class="form-control border-input" name="stock_code"
                                            id="inp_stock_code" placeholder="Stock Code" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="item-name-label">Price</label>
                                        <input type="number" class="form-control border-input" name="price"
                                            id="inp_price" min="0" step="0.01" placeholder="Price" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="item-name-label">Quantity</label>
                                        <input type="number" class="form-control border-input" name="quantity"
                                            id="inp_quantity" placeholder="Quantity">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="item-name-label">Model No</label>
                                        <input type="text" class="form-control border-input" name="model_no"
                                            id="inp_model_no" placeholder="Model No">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control border-input" name="description"
                                            id="inp_description" placeholder="Here can be your description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Create Item</button>
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

    .select2-container .select2-selection--single {
        height: 40px;
    }

</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function () {
        $('.item-select').select2({
            placeholder: "Select Item",
        });
    });

</script>
@endpush
