@extends('layouts.app', ['page' => 'Register Payment', 'pageSlug' => 'payments-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        {{-- @include('alerts.error') --}}
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Payment</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{route('sales.payments.index', $sale_id)}}" class="btn btn-sm btn-primary">Back to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('sales.payments.store', $sale_id) }}" autocomplete="off">
                            @csrf
                            @isset($is_sale)
                                <input type="hidden" name="is_sale" value="true">
                                @endisset
                                <input type="hidden" name="is_sale" value="false">
                            <h6 class="heading-small text-muted mb-4">Payment information</h6>
                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    
                                    <div class="row col m-0 p-0">
                                        <label class="form-control-label" for="input-stock">Amount</label>
                                        <div class="text-right text-danger col">remaining balance: <span id="product-count">GHC {{$sale->balance}}</span>
                                        </div>
                                    </div>
                                    <input type="number" step="0.1" name="amount" id="input-stock" min="1" max="{{$sale->balance}}"
                                        class="form-control form-control-alternative" placeholder="Amount"
                                        value="{{ old('amount') }}" autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Mode of Payment</label>
                                    <select name="payment_method_id" id="input-category" class="form-select form-control-alternative">
                                        @foreach ($paymentMethods as $paymentMethod)
                                            @if ($paymentMethod['id'] == old('payment_method_id'))
                                                <option value="{{ $paymentMethod['id'] }}" selected>{{ $paymentMethod['name'] }}
                                                </option>
                                            @else
                                                <option value="{{ $paymentMethod['id'] }}">{{ $paymentMethod['name'] }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    {{-- @include('alerts.feedback', ['field' => 'product_category_id']) --}}
                                </div>
                                <button type="submit" class="btn btn-success mt-4">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        new SlimSelect({
            select: '.form-select'
        })
    </script>
@endpush
