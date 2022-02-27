@extends('layouts.app', ['page' => 'Register Expense', 'pageSlug' => 'expenses', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Expense</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('expenses.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('expenses.store') }}" autocomplete="off">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <h6 class="heading-small text-muted mb-4">Expense Details</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Amount</label>
                                    <input type="number" step="0.1" name="amount" id="input-price"
                                        class="form-control form-control-alternative" placeholder="Amount"
                                        value="{{ old('price') }}" required autofocus>
                                    {{-- @include('alerts.feedback', ['field' => 'price']) --}}
                                </div>
                                <div class="form-group{{ $errors->has('expense_type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Expense Type</label>
                                    <input type="text"
                                        class="form-control {{ $errors->has('expense_type') ? ' border-danger' : '' }}"
                                        list="expenseList" name="expense_type" autofocus>
                                    <datalist id="expenseList">
                                        @foreach ($expenseTypes as $expenseType)
                                            @if ($expenseType->expense_type == old('expense_type'))
                                                <option value="{{ $expenseType->expense_type }}" selected>
                                                    {{ $expenseType->expense_type }}</option>
                                            @else
                                                <option value="{{ $expenseType->expense_type }}">
                                                    {{ $expenseType->expense_type }}</option>
                                            @endif
                                        @endforeach
                                    </datalist>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="form-control-label" for="input-name">Expense Type</label>
                                    <select name="expense_type_id" id="expense_type"
                                        class="form-select form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        required>
                                        @foreach ($expenseTypes as $expenseType)
                                            <option value="{{ $expenseType['id'] }}">{{ $expenseType['type'] }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Provider (optional)</label>
                                    <input type="text"
                                        class="form-control {{ $errors->has('provider') ? ' border-danger' : '' }}"
                                        list="expenseList" name="provider" autofocus>
                                    <datalist id="expenseList">
                                        @foreach ($providers as $provider)
                                            @if ($provider->name == old('provider'))
                                                <option value="{{ $provider->name }}" selected>
                                                    {{ $provider->name }}</option>
                                            @else
                                                <option value="{{ $provider->name }}">{{ $provider->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Payment Method</label>
                                    <select name="payment_method_id" id="input-category"
                                        class="another-form-select form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        required>
                                        @foreach ($paymentMethods as $paymentMethod)
                                            <option value="{{ $paymentMethod['id'] }}">{{ $paymentMethod['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Reference</label>
                                    <input type="text" name="reference" id="input-price"
                                        class="form-control form-control-alternative" placeholder="Reference"
                                        value="{{ old('price') }}">
                                    {{-- @include('alerts.feedback', ['field' => 'price']) --}}
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
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
        // new SlimSelect({
        //     select: '.form-select'
        // })
        new SlimSelect({
            select: '.another-form-select'
        })
    </script>
@endpush
