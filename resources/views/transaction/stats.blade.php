@extends('layouts.app', ['pageSlug' => 'stats', 'page' => 'Statistics', 'section' => 'transactions'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Transaction Statistics</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('transactions.index')}}" class="btn btn-sm btn-primary">
                                View Transactions
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>Period</th>
                                <th>Transactions</th>
                                <th>Income</th>
                                <th>Expenses</th>
                                <th>Net Cash</th>
                                <th>Cash Balance</th>
                                <th>Total Cash</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($stats as $period => $stat)
                                 <tr>
                                    <td>{{$period}}</td>
                                    <td>{{$stat['transactions']}}</td>
                                    <td>GHC {{$stat['income']}}</td>
                                    <td>GHC {{$stat['expense']}}</td>
                                    <td>GHC {{$stat['income'] - $stat['expense']}}</td>
                                    <td>GHC {{$stat['balance']}}</td>
                                    <td>GHC {{($stat['income'] - $stat['expense']) + $stat['balance']}}</td>
                                 </tr>
                                @endforeach
                                {{-- @foreach ($transactionsperiods as $period => $data)
                                    <tr>
                                        <td>{{ $period }}</td>
                                        <td>{{ $data->count() }}</td>
                                        <td>{{ format_money($data->where('type', 'income')->sum('amount')) }}</td>
                                        <td>{{ format_money($data->where('type', 'expense')->sum('amount')) }}</td>
                                        <td>{{ format_money($data->where('type', 'payment')->sum('amount')) }}</td>
                                        <td>{{ format_money($data->where('payment_method_id', optional($methods->where('name', 'Cash')->first())->id)->sum('amount')) }}</td>
                                        <td>{{ format_money($data->sum('amount')) }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach --}}
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Sales Statistics</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="" class="btn btn-sm btn-primary">View Sales</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Period</th>
                        <th>Sales</th>
                        <th>Clients</th>
                        <th>Total Stock</th>
                        <th data-toggle="tooltip" data-placement="bottom" title="Promedio de ingresos por cada venta">Average C / V</th>
                        <th>Billed Amount</th>
                        <th>To Finalize</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div> --}}
@endsection