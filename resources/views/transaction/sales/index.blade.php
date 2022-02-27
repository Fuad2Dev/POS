@extends('layouts.app', ['page' => 'Sales', 'pageSlug' => 'sales', 'section' => 'transactions'])

@section('content')
    {{-- @include('alerts.success') --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <h4 class="card-title">Sales</h4>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary btn-simple active" id="all">
                                    <input type="radio" name="options" checked>
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">All</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-single-02"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-primary btn-simple" id="open">
                                    <input type="radio" class="d-none d-sm-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Open</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-gift-2"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-primary btn-simple" id="unbalanced">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Unbalanced</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-tap-02"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-primary btn-simple" id="balanced">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Balanced</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-tap-02"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-primary btn-simple" id="try-out">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Try Out</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-tap-02"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('sales.create') }}" class="btn btn-sm btn-primary">Register Sale</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table">
                            <thead>
                                <th>Date</th>
                                <th>Client</th>
                                <th>User</th>
                                <th>Products</th>
                                <th>Total Stock</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($sales as $sale)
                                    <tr class="{{ $sale->status }}">
                                        <td>{{ date('d-m-y', strtotime($sale->created_at)) }}</td>
                                        <td><a href="">{{ $sale->client->name }}</a></td>
                                        <td>{{ $sale->user->name }}</td>
                                        <td class="text-center">{{ $sale->products->count() }}</td>
                                        <td class="text-center">{{ $sale->products->sum('qty') }}</td>
                                        <td class="text-center">{{ $sale->products->sum('total_amount') }}</td>
                                        {{-- <td>{{ $sale->products->count() }}</td> --}}
                                        {{-- <td>{{ $sale->products->sum('qty') }}</td> --}}
                                        {{-- <td>{{ format_money($sale->transactions->sum('amount')) }}</td> --}}
                                        <td>
                                            {{ $sale->status }}
                                        </td>
                                        <td class="td-actions text-right">

                                            @if ($sale->status == 'open')
                                                <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-link"
                                                    data-toggle="tooltip" data-placement="bottom" title="Edit Sale">
                                                    <i class="tim-icons icon-pencil"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="View Sale">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                            @if (auth()->user()->isAdmin)
                                                <form action="{{ route('sales.destroy', $sale->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                        data-placement="bottom" title="Delete Sale"
                                                        onclick="confirm('Are you sure you want to delete this sale? All your records will be permanently deleted.') ? this.parentElement.submit() : ''">
                                                        <i class="tim-icons icon-simple-remove"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $sales->links('vendor.pagination.bootstrap-4') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $('#all').click(function() {
                $('.open').show()
                $('.unbalanced').show()
                $('.balanced').show()
                $('.try').show()
            })
            $('#open').click(function() {
                $('.open').show()
                $('.unbalanced').hide()
                $('.balanced').hide()
                $('.try').hide()
            })
            $('#unbalanced').click(function() {
                $('.open').hide()
                $('.unbalanced').show()
                $('.balanced').hide()
                $('.try').hide()
            })
            $('#balanced').click(function() {
                $('.open').hide()
                $('.unbalanced').hide()
                $('.try').hide()
                $('.balanced').show()
            })
            $('#try-out').click(function() {
                $('.open').hide()
                $('.unbalanced').hide()
                $('.balanced').hide()
                $('.try').show()
            })
        })
    </script>
@endpush
