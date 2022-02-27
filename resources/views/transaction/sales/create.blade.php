@extends('layouts.app', ['page' => 'Register Sale', 'pageSlug' => 'sales-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        {{-- @include('alerts.error') --}}
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Sale</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('sales.index') }}" class="btn btn-sm btn-primary">Back to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('sales.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Customer information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('client_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Client</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' border-danger' : '' }}" list="usersList" name="name" autofocus required>
                                        <datalist id="usersList">
                                            @foreach ($clients as $client)
                                                @if ($client['id'] == old('client'))
                                                    <option value="{{ $client['name'] }}" selected> @if( $client['phone'] ) {{ $client['phone'] }} @else <i>unset</i> @endif</option>
                                                @else
                                                    <option value="{{ $client['name'] }}"> @if( $client['phone'] ) {{ $client['phone'] }} @else <i>unset</i> @endif</option>
                                                @endif
                                            @endforeach
                                        </datalist>
                                    {{-- @include('alerts.feedback', ['field' => 'client_id']) --}}
                                </div>

                                <button type="submit" class="btn btn-success mt-4">Continue</button>
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
