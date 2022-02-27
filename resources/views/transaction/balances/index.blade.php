@extends('layouts.app', ['page' => 'Balances', 'pageSlug' => 'balances', 'section' => 'transactions'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Balances</h4>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary">Register Expense</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    {{-- @include('alerts.success') --}}

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Client</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Reference</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($balances as $balance)
                                    <tr>
                                        <td>{{ date('d-m-y', strtotime($balance->created_at)) }}</td>
                                        <td>{{ $balance->user->name }}</td>    
                                        <td>{{ $balance->client->name }}</td>    
                                        <td>
                                            @if ($balance->amount < 0)
                                                <span class="text-danger">{{$balance->amount}}</span>
                                            @else
                                                <span class="text-success">{{$balance->amount}}</span>
                                            @endif
                                        </td>    
                                        <td>
                                            @if ($balance->reference)
                                                {{$balance->reference}}
                                            @else
                                                ---
                                            @endif
                                        </td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('sales.show', $balance->sale_id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="More Details">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                        </td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{-- {{ $balances->links() }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
