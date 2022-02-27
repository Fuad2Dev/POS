@extends('layouts.app', ['page' => 'Manage Sale', 'pageSlug' => 'sales', 'section' => 'transactions'])

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 13px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #4554c2;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
            top: 0;
            /* bottom: 0; */
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
            top: 0;
            /* bottom: 0; */
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
            top: 0;
            /* bottom: 0; */
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
            top: 0;
            /* bottom: 0; */
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
        }

    </style>
@endsection

@section('content')
    @include('alerts.success')

    @include('alerts.error')

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Sale Summary</h4>
                        </div>

                        <div class="col-6 row justify-content-end">
                            @if ($sale->status == 'open')
                                <form action="{{ route('sales.products.checkoutWithPayment', $sale->id) }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        onclick="confirm('make sure all products are in order before proceeding?') ? this.parentElement.submit() : ''"
                                        class="btn btn-sm btn-primary d-flex justify-content-between align-items-center"
                                        @if ($sale->products->count() == 0) disabled @endif>
                                        Add Payments <i class="tim-icons icon-money-coins pl-2"></i>
                                    </button>
                                    {{-- <button
                                    class="btn btn-primary d-flex justify-content-between align-items-center">Payment
                                    History <i class="tim-icons icon-money-coins pl-2"></i></button> --}}
                                    {{-- <a href="{{route('sales.payments.index', $sale->id)}}" type="submit" class="btn btn-sm btn-primary d-flex justify-content-between align-items-center">
                                        Checkout <i class="tim-icons icon-cart pl-2"></i>
                                    </a> --}}
                                </form>
                                {{-- <a href="{{ route('sales.payments.create', $sale->id) }}"
                                    @if ($sale->products->count() == 0) disabled @endif
                                    onclick="return confirm('make sure all products are in order before proceeding') "
                                    class="text-white btn btn-primary btn-sm d-flex justify-content-between align-items-center">Add Payments<i class="tim-icons icon-money-coins pl-2"></i></a> --}}
                            @endif
                            @if ($sale->status == 'open')
                                <form action="{{ route('sales.products.checkout', $sale->id) }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        onclick="confirm('products added to this sale would be finalized, do you wish to continue?') ? this.parentElement.submit() : ''"
                                        class="btn btn-sm btn-primary d-flex justify-content-between align-items-center"
                                        @if ($sale->products->count() == 0) disabled @endif>
                                        Checkout <i class="tim-icons icon-cart pl-2"></i>
                                    </button>
                                </form>
                                <form action="{{ route('sales.products.tryout', $sale->id) }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        onclick="confirm('products added to this sale would be finalized, do you wish to continue?') ? this.parentElement.submit() : ''"
                                        class="btn btn-sm btn-primary d-flex justify-content-between align-items-center"
                                        @if ($sale->products->count() == 0) disabled @endif>
                                        Try Out <i class="tim-icons icon-cart pl-2"></i>
                                    </button>
                                </form>
                            @else
                                @if ($sale->status == 'try out')
                                <a href="{{ route('sales.finalize', $sale->id) }}"
                                    class="text-white btn btn-primary d-flex justify-content-between align-items-center">Finalize <i class="tim-icons icon-money-coins pl-2"></i></a>
                                    @else
                                    <a href="{{ route('sales.payments.index', $sale->id) }}"
                                        class="text-white btn btn-primary d-flex justify-content-between align-items-center">Payment
                                        History <i class="tim-icons icon-money-coins pl-2"></i></a>
                                @endif
                            @endif
                        </div>
                        {{-- <a href="{{route('print.test')}}" class="btn btn-primary btn-sm">Print Something</a> --}}

                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Date</th>
                            <th>User</th>
                            <th>Client</th>
                            <th>products</th>
                            <th>Total Stock</th>
                            <th>Total Cost</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ date('d-m-y', strtotime($sale->created_at)) }}</td>
                                <td>{{ $sale->user->name }}</td>
                                <td><a href="">{{ $sale->client->name }}</a></td>
                                {{-- @isset($sale->client->name)
                                    <td><a href="">{{ $sale->client->name }}</a></td>
                                @else
                                <td><i>unset</i></td>
                                @endisset --}}
                                {{-- <td><a href="{{ route('clients.show', $sale->client) }}">{{ $sale->client->name }}</a></td> --}}
                                <td>{{ $sale->products->count() }}</td>
                                <td>{{ $sale->products->sum('qty') }}</td>
                                <td>GHC {{ $sale->products->sum('total_amount') }}</td>
                                <td>{{ $sale->status }}</td>
                                {{-- <td>{!! $sale->finalized_at ? 'Completed at<br>'.date('d-m-y', strtotime($sale->finalized_at)) : (($sale->products->count() > 0) ? 'TO FINALIZE' : 'ON HOLD') !!}</td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row col-12">
                        <div class="col">
                            <h4 class="card-title">Count: {{ $sale->products->sum('qty') }}</h4>
                            {{-- <h4 class="card-title">products: {{ $sale->products->sum('qty') }}</h4> --}}
                        </div>
                        @if (!$sale->finalized_at)
                            <div style="width: 0; overflow:hidden">
                                <input onblur="this.focus()" type="text" name="barcode" id="input-code" autofocus>
                            </div>
                            <form action="{{ route('sales.products.store', $sale->id) }}" method="post"
                                id="sales-products-store-form">
                                @csrf
                            </form>
                            @if ($sale->status == 'open' || $sale->status == 'try out')
                                <div class="col-5 justify-conten-center row align-items-center">
                                    <h4 class="card-title m-0">Scan To Add Product</h4>
                                    <div class="lds-ellipsis ml-2">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            @endif
                            @if ($sale->status == 'open' || $sale->status == 'try out')
                                <div class="col row justify-content-end">
                                    <a href="{{ route('sales.products.create', $sale->id) }}"
                                        class="btn btn-primary btn-sm">Add Products</a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price C/U</th>
                            <th>Total</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($sale->products as $sold_product)
                                <tr>
                                    <td><a
                                            href="{{ route('categories.show', $sold_product->product->category) }}">{{ $sold_product->product->category }}</a>
                                    </td>
                                    <td><a
                                            href="{{ route('products.show', $sold_product->product) }}">{{ $sold_product->product->name }}</a>
                                    </td>
                                    <td>{{ $sold_product->qty }}</td>
                                    <td>GHC {{ $sold_product->price }}</td>
                                    <td>GHC {{ $sold_product->total_amount }}</td>
                                    <td class="td-actions row justify-content-end">
                                        @if ($sale->status == 'open' || $sale->status == 'try out')
                                            @if ($sold_product->product->stock > 0)
                                                <form
                                                    action="{{ route('sales.products.add', ['sale_id' => $sale->id, 'sold_id' => $sold_product->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link" data-toggle="tooltip"
                                                        data-placement="bottom" title="Add Product">
                                                        <i class="bi bi-plus-lg"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            @if ($sold_product->qty != 1)
                                                <form
                                                    action="{{ route('sales.products.remove', ['sale_id' => $sale->id, 'sold_id' => $sold_product->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link" data-toggle="tooltip"
                                                        data-placement="bottom" title="Reduce Product">
                                                        <i class="bi bi-dash-lg"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            <form
                                                action="{{ route('sales.products.delete', ['sale_id' => $sale->id, 'sold_id' => $sold_product->id]) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete Pedido"
                                                    onclick="confirm('Product would be removed from sale') ? this.parentElement.submit() : ''">
                                                    <i class="bi bi-trash"></i>
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
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets') }}/js/sweetalerts2.js"></script>
    <script>
        $(function() {
            $oTime = 0;
            $('#input-code').keyup(function(event) {
                const date = new Date();
                $nTime = date.getTime();
                if ($nTime - $oTime > 50) {
                    $(this).val($(this).val()[$(this).val().length - 1])
                }
                console.log($nTime - $oTime);
                $oTime = $nTime;
            })

            $('#input-code').on('change', function() {
                if ($(this).val().length > 5) {
                    $('#sales-products-store-form').hide().append($(this))
                    $('#sales-products-store-form').submit();
                }
            })
        })
    </script>

    <script>
        $(function() {
            $('.alert').slideDown('slow')

        })
        $(function() {
            setTimeout(() => {
                $('.alert').slideUp('slow', 0)
            }, 3000);
        })
    </script>
@endpush
