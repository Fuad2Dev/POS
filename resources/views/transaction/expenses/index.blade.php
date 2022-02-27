@extends('layouts.app', ['page' => 'Expenses', 'pageSlug' => 'expenses', 'section' => 'transactions'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Expenses</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('expenses.create') }}" class="btn btn-sm btn-primary">Register Expense</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @include('alerts.success') --}}

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Method</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Reference</th>
                                <th scope="col">Provider</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $expense)
                                    <tr>
                                        <td>{{ date('d-m-y', strtotime($expense->created_at)) }}</td>
                                        <td>{{ $expense->expense_type }}</td>
                                        <td>{{ $expense->paymentMethod->name }} @if ($expense->paymentMethod->description) ({{ \Illuminate\Support\Str::limit($expense->paymentMethod->description, 10) }}) @endif</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->reference }}</td>
                                        <td>---</td>
                                        <td class="td-actions text-right">
                                            @if ($expense->sale_id)
                                                <a href="{{ route('sales.show', $expense->sale_id) }}"
                                                    class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                    title="More Details">
                                                    <i class="tim-icons icon-zoom-split"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('expenses.edit', $expense->id) }}"
                                                    class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                    title="Edit expense">
                                                    <i class="tim-icons icon-pencil"></i>
                                                </a>
                                                @if (auth()->user()->isAdmin)
                                                    <form action="{{ route('expenses.destroy', $expense) }}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                            data-placement="bottom" title="Delete expense"
                                                            onclick="confirm('Are you sure you want to delete this expense? There will be no record left.') ? this.parentElement.submit() : ''">
                                                            <i class="tim-icons icon-simple-remove"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- @foreach ($expenses as $expense)
                                    <tr>
                                        <td> {{ date('d-m-y', strtotime($expense->created_at)) }}</td>
                                        <td> {{ $expense->title }}</td>
                                        <td><a href="{{ route('methods.show', $expense->method) }}">{{ $expense->method->name }}</a></td>
                                        <td>{{ format_money($expense->amount) }}</td>
                                        <td>{{ $expense->reference }}</td>
                                        <td class="td-actions text-right">
                                            @if ($expense->sale_id)
                                                <a href="{{ route('sales.show', $expense->sale_id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="More Details">
                                                    <i class="tim-icons icon-zoom-split"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit expense">
                                                    <i class="tim-icons icon-pencil"></i>
                                                </a>
                                                <form action="{{ route('expenses.destroy', $expense) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete expense" onclick="confirm('Are you sure you want to delete this expense? There will be no record left.') ? this.parentElement.submit() : ''">
                                                        <i class="tim-icons icon-simple-remove"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $expenses->links('vendor.pagination.bootstrap-4') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
