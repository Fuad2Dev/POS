@extends('layouts.app', ['page' => 'Payments', 'pageSlug' => 'sales', 'section' => 'transactions'])

@section('content')
@include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <h4 class="card-title">Payments Made</h4>
                        </div>
                        <div class="col-4">
                            
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('sales.index') }}" class="btn btn-sm btn-primary">Back to Sales</a>
                            @if ($payments->count() == 0 || $payments->last()->balance != 0)
                                <a href="{{ route('sales.payments.create', $sale_id) }}" class="btn btn-sm btn-primary">Add
                                    Payments</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @include('alerts.success') --}}

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Attendant</th>
                                <th>Balance</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ date('d-m-y', strtotime($payment->created_at)) }}</td>
                                        <td>{{ $payment->amount }}</td>
                                        <td> {{ $payment->user->name }} </td>
                                        <td> {{ $payment->balance }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{-- {{ $clients->links('vendor.pagination.bootstrap-4') }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
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