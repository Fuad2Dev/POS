@extends('layouts.app', ['page' => 'List of Products', 'pageSlug' => 'products', 'section' => 'inventory'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            <h4 class="card-title">Products ({{ $products->count() }})</h4>
                        </div>
                        <div class="col-8">
                            <input class="form-control" id="search" type="text" placeholder="Search Keyword..." autofocus>
                        </div>
                        @if (auth()->user()->isAdmin)
                        <div class="col-2 text-right">
                            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">New product</a>
                        </div>
                        @endif
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    {{-- @include('alerts.success') --}}

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Category</th>
                                <th scope="col">Product</th>
                                <th scope="col">Code</th>
                                <th scope="col">Base Price</th>
                                <th scope="col">size / type</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Faulty</th>
                                <th scope="col">Total Sold</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        @if ($product->category)
                                            <td><a href="">{{ $product->category }}</a></td>
                                        @else
                                            <td><i>unset</i></td>
                                        @endif
                                        @if ($product->name)
                                            <td>{{ $product->name }}</td>
                                        @else
                                            <td><i>unset</i></td>
                                        @endif
                                        @if ($product->code)
                                            <td>{{ $product->code }}</td>
                                        @else
                                            <td><i>unset</i></td>
                                        @endif

                                        @if ($product->price)
                                            <td>GHC{{ $product->price }}</td>
                                        @else
                                            <td>GHC0.00</td>
                                        @endif
                                        @if ($product['size/type'])
                                            <td>{{ $product['size/type'] }}</td>
                                        @else
                                            <td>unset</td>
                                        @endif
                                        @if ($product->stock)
                                            <td>{{ $product->stock }}</td>
                                        @else
                                            <td>0</td>
                                        @endif
                                        @if ($product->stock_defective)
                                            <td>{{ $product->stock_defective }}</td>
                                        @else
                                            <td>0</td>
                                        @endif

                                        <td>{{ $product->soldProducts->count() }}</td>
                                        <td style="display: none">{{$product->barcode}}</td>
                                        {{-- <td>{{ $product->solds->sum('qty') }}</td> --}}
                                        <td class="td-actions text-right">
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="More Details">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit Product">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            @if(auth()->user()->isAdmin)
                                            <form action="{{route('products.destroy', $product->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete Product"
                                                    onclick="confirm('Are you sure you want to remove this product? The records that contain it will continue to exist.') ? this.parentElement.submit() : ''">
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
                    <nav class="d-flex justify-content-end">
                        {{-- {{ $products->links('vendor.pagination.bootstrap-4') }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                console.log('hi');
                var value = $(this).val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush
