@extends('layouts.app', ['page' => 'Add Product', 'pageSlug' => 'sales', 'section' => 'transactions'])

@section('content')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add Product</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('sales.show', [$sale->id]) }}" class="btn btn-sm btn-primary">Back to
                                List</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('sales.products.storeManual', $sale->id) }}" autocomplete="off">
                        @csrf

                        <div class="pl-lg-4">
                            <input type="hidden" name="sale_id" value="{{ $sale->id }}">
                            <div class="form-group{{ $errors->has('product_id') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-product">Product</label>
                                <select name="product_id" id="input-product"
                                    class="form-select form-control-alternative{{ $errors->has('product_id') ? ' is-invalid' : '' }}"
                                    required>
                                    @foreach ($products as $product)
                                        @if ($product['id'] == old('product_id'))
                                            <option value="{{ $product['id'] }}" selected>[{{ $product->category }}]
                                                {{ $product->name }} - Base price: @if ($product->price) GHC {{ $product->price }} @else <i>unset</i> @endif </option>
                                        @else
                                            <option value="{{ $product['id'] }}" @if ($product->stock == 0) disabled @endif>[{{ $product->category }}] {{ $product->name }} - Base price: @if ($product->price) GHC {{ $product->price }} @else <i>unset</i> @endif  @if ($product->stock - $product->stock_defective == 0) <div> ***Out Of Stock***</div> @endif</option>
                                        @endif
                                    @endforeach
                                </select>
                                {{-- @include('alerts.feedback', ['field' => 'product_id']) --}}
                            </div>

                            {{-- <div class="form-group{{ $errors->has('product_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Price per Unit</label>
                                    <input type="number" name="price" id="input-price" step=".01" class="form-control form-control-alternative{{ $errors->has('product_id') ? ' is-invalid' : '' }}" value="0" required>
                                    
                                </div> --}}

                            <div class="form-group{{ $errors->has('product_id') ? ' has-danger' : '' }}">
                                <div class="row col m-0 p-0">
                                    <label class="form-control-label" for="input-qty">Quantity</label>
                                    <div class="text-right text-danger col">available: <span id="product-count">0</span>
                                    </div>
                                </div>
                                <input min="1" type="number" name="qty" id="input-qty"
                                    class="form-control form-control-alternative{{ $errors->has('product_id') ? ' is-invalid' : '' }}"
                                    value="1" required>
                                {{-- @include('alerts.feedback', ['field' => 'product_id']) --}}
                            </div>

                            {{-- <div class="form-group{{ $errors->has('product_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-total">Total Amount</label>
                                    <input type="text" name="total_amount" id="input-total" class="form-control form-control-alternative{{ $errors->has('product_id') ? ' is-invalid' : '' }}" value="0$" disabled>
                                    
                                </div> --}}

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        new SlimSelect({
            select: '.form-select'
        });
    </script>

    {{-- <script>
        let input_qty = document.getElementById('input-qty');
        let input_price = document.getElementById('input-price');
        let input_total = document.getElementById('input-total');
        input_qty.addEventListener('input', updateTotal);
        input_price.addEventListener('input', updateTotal);
        function updateTotal () {
            input_total.value = (parseInt(input_qty.value) * parseFloat(input_price.value))+"$";
        }
    </script> --}}

    <script>
        $(function() {
            $stockList = {
                @foreach ($products as $product)
                    '{{ $product->id }}': '{{ $product->stock }}',
                @endforeach
            }

            console.log($stockList);

            $('#input-qty').val(1)
            $('#input-qty').attr('max', $stockList[$('#input-product').val()])
            $('#product-count').text($stockList[$('#input-product').val()])

            $('#input-product').on('change', function() {
                $('#input-qty').val(1)
                $('#input-qty').attr('max', $stockList[$(this).val()])
                $('#product-count').text($stockList[$(this).val()])
                // $('#input-qty').attr('max') = $stockList[$(this).val()];
            })
        })
    </script>
@endpush
