@extends('layouts.app', ['page' => 'Client Information', 'pageSlug' => 'clients', 'section' => 'clients'])

@section('content')
    {{-- @include('alerts.error') --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Client Information</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            {{-- <a href="{{ route('clients.transactions.add', $client) }}" class="btn btn-sm btn-primary">New Transaction</a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Sales</th>
                            <th>Total Payment</th>
                            <th>Balance</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $sales->where('client_id', $client->id)->count() }}</td>
                                <td> GHC {{ $client->payments->sum('amount') }} </td>
                                <td> GHC{{ $sales->where('status', 'unbalanced')->where('client_id', $client->id)->sum('balance') }}</td>
                                {{-- <td>
                                    @if ($client->balance > 0)
                                        <span class="text-success">{{ format_money($client->balance) }}</span>
                                    @elseif ($client->balance < 0.00)
                                        <span class="text-danger">{{ format_money($client->balance) }}</span>
                                    @else
                                        {{ format_money($client->balance) }}
                                    @endif
                                </td>
                                <td>{{ $client->sales->count() }}</td>
                                <td>{{ format_money($client->transactions->sum('amount')) }}</td>
                                <td>{{ (empty($client->sales)) ? date('d-m-y', strtotime($client->sales->reverse()->first()->created_at)) : 'N/A' }}</td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Payments</h4>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary">New Payment</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Date</th>
                            <th>Method</th>
                            <th>Sale ID</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach ($client->payments as $payment)
                                <tr>
                                    <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $paymentMethods->where('id', $payment->payment_method_id)->first()->name }}</td>
                                    <td> {{$payment->sale_id}} </td>
                                    <td>GHC {{ $payment->amount }}</td>
                                    
                                        @if ($payment->balance == 0.00)
                                            <td>full payment</td>
                                        @else
                                            <td>part payment</td>
                                        @endif
                                    
                                    <td class="td-actions text-right">
                                        <a href="{{ route('sales.show', $payment->sale_id) }}" class="btn btn-link"
                                            data-toggle="tooltip" data-placement="bottom" title="View Sale">
                                            <i class="tim-icons icon-zoom-split"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @foreach ($client->transactions->reverse()->take(25) as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ date('d-m-y', strtotime($transaction->created_at)) }}</td>
                                    <td><a href="{{ route('methods.show', $transaction->method) }}">{{ $transaction->method->name }}</a></td>
                                    <td>{{ format_money($transaction->amount) }}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Sales</h4>
                        </div>
                        <div class="col-4 text-right">
                            <form method="post" action="{{ route('sales.store') }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input type="hidden" name="client_id" value="{{ $client->id }}">
                                <button type="submit" class="btn btn-sm btn-primary">New Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Date</th>
                            <th>products</th>
                            <th>Total Amount</th>
                            <th>State</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($sales->where('client_id', $client->id) as $sale)
                                <tr>
                                    <td>{{$sale->created_at->format('Y-m-d')}}</td>
                                    <td> {{$sale->products->count()}} </td>
                                    <td> {{$sale->total_amount}} </td>
                                    <td> {{$sale->status}} </td>
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
        </div>
    </div>
@endsection
