@extends('layouts.app', ['page' => 'New Product', 'pageSlug' => 'products', 'section' => 'inventory'])

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
            background: #fff;
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

    <style>
        .active {
            display: block !important;
        }

    </style>
@endsection

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Product</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('products.store') }}" autocomplete="off"
                            id="add-product-form">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Product Information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="Name" value="{{ old('name') }}" autofocus>
                                    {{-- @include('alerts.feedback', ['field' => 'name']) --}}
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label for="categoryDataList" class="form-label">Category</label>
                                        <input name="category" class="form-control" list="categoryList" id="categoryDataList"
                                            placeholder="e.g: Shoes" value="{{ old('category') }}">
                                        <datalist id="categoryList">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->category}}">
                                            @endforeach
                                        </datalist>
                                    </div>
                                    <div class="form-group col">
                                        <label for="sizeDataList" class="form-label">Size</label>
                                        <input name="size" class="form-control" list="sizeList" id="sizeDataList"
                                            placeholder="e.g: (x-small, large, ...) or (34, 25, ...)" value="{{ old('size') }}">
                                        <datalist id="sizeList">
                                            @foreach ($sizes as $size)
                                                <option value="{{$size->size}}">
                                            @endforeach
                                        </datalist>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label for="codeeDataList" class="form-label">Code</label>
                                        <input name="code" class="form-control" list="codeList" id="codeDataList"
                                            placeholder="e.g: Avon Roll-on" value="{{ old('code') }}">
                                        <datalist id="codeList">
                                            @foreach ($codes as $code)
                                                <option value="{{$code->code}}">
                                            @endforeach
                                        </datalist>
                                    </div>
                                    <div class="form-group col">
                                        <label for="colorDataList" class="form-label">Color</label>
                                        <input name="color" class="form-control" list="colorList" id="colorDataList"
                                            placeholder="e.g: Navy" value="{{ old('color') }}">
                                        <datalist id="colorList">
                                            @foreach ($colors as $color)
                                                <option value="{{$color->color}}">
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <input type="text" name="description" id="input-description"
                                        class="form-control form-control-alternative" placeholder="Additional Information (optional)"
                                        value="{{ old('description') }}">
                                    {{-- @include('alerts.feedback', ['field' => 'description']) --}}
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-stock">Stock</label>
                                            <input type="number" name="stock" id="input-stock"
                                                class="form-control form-control-alternative" placeholder="Stock"
                                                value="{{ old('stock') }}">
                                            {{-- @include('alerts.feedback', ['field' => 'stock']) --}}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group{{ $errors->has('stock_defective') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-stock_defective">Defective
                                                Stock</label>
                                            <input type="number" name="stock_defective" id="input-stock_defective"
                                                class="form-control form-control-alternative" placeholder="Defective Stock"
                                                value="{{ old('stock_defective') }}">
                                            {{-- @include('alerts.feedback', ['field' => 'stock_defective']) --}}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-price">Price</label>
                                            <input type="number"  name="price" id="input-price"
                                                class="form-control form-control-alternative" placeholder="Price"
                                                value="{{ old('price') }}">
                                            {{-- @include('alerts.feedback', ['field' => 'price']) --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="btn btn-primary" id="scan-code-btn">
                                        <div id="not-reading" style="display: none" class="active">
                                            <span>Scan Code</span> <i class="bi bi-qr-code-scan"></i>
                                        </div>
                                        <div id="reading" style="display: none">
                                            <div>Waiting</div>
                                            <div class="lds-ellipsis">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="width: 0; overflow:hidden">
                                        <input type="text" name="barcode" id="input-code">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="save" class="btn btn-primary">
                                </div>
                                {{-- <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div> --}}
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

    <script>
        $(function() {
            $('#scan-code-btn').click(function() {
                $('#input-code').focus()
            })

            $('#input-code').on('change', function() {
                if ($(this).val().length > 5) {
                    $('#add-product-form').submit();
                }
            })

            $('#input-code').focusout(function() {
                $('#scan-code-btn').children('div').each(function() {
                    $(this).toggleClass('active')
                })
            })
            $('#input-code').focusin(function() {
                $('#scan-code-btn').children('div').each(function() {
                    $(this).toggleClass('active')
                })
            })

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
        })
    </script>
@endpush
