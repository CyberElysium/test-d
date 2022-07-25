@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="title">Items Table</h4>
                                <p class="category">all items in system</p>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('items.new') }}" class="btn btn-info btn-fill btn-wd new-item-btn">New
                                    Item</a>
                            </div>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped" id="items-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Stock Code</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->stock_code }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="restoreConf('{{ route('items.restore', $item->id) }}','Do You Want To Restore Item')">
                                            <i class="fa-solid fa-trash-can-arrow-up text-success"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="ml-3"
                                            onclick="delconf('{{ route('items.delete.force', $item->id) }}','Do You Want To Remove Item Completely')">
                                            <i class="fa-solid fa-trash-can text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<style>
    .new-item-btn {
        float: right;
        margin-top: 2rem;
    }

</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function () {
        $('#items-table').DataTable({
            "language": {
                "emptyTable": "No data available in the table",
                "paginate": {
                    "previous": '<i class="fa-solid fa-angles-left"></i>',
                    "next": '<i class="fa-solid fa-angles-right"></i>'
                },
                "sEmptyTable": "No data available in the table"
            },
            pageLength: 10,
            lengthMenu: [10, 50, 100],

        });
    });

</script>
@endpush
