@extends('layouts.app', ['page' => 'Register Provider', 'pageSlug' => 'providers', 'section' => 'providers',])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Provider</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('providers.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('providers.update', $provider->id) }}" autocomplete="off">
                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">Provider Details</h6>
                            <div class="pl-lg-4">
                                
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Name</label>
                                    <input type="text" name="name" id="input-price" class="form-control form-control-alternative" placeholder="Name" value="{{$provider->name}}" required autofocus>
                                    {{-- @include('alerts.feedback', ['field' => 'price']) --}}
                                </div>
                                
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Email</label>
                                    <input type="email" name="email" id="input-price" class="form-control form-control-alternative" placeholder="Email" value="{{$provider->email}}" >
                                    {{-- @include('alerts.feedback', ['field' => 'price']) --}}
                                </div>

                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Phone</label>
                                    <input type="tel" name="phone" id="input-price" class="form-control form-control-alternative" placeholder="Phone" value="{{$provider->phone}}" required>
                                    {{-- @include('alerts.feedback', ['field' => 'price']) --}}
                                </div>
                                
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">Reference</label>
                                    <input type="text" name="reference" id="input-price" class="form-control form-control-alternative" placeholder="Reference" value="{{$provider->reference}}" >
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
        new SlimSelect({
            select: '.form-select'
        })
        new SlimSelect({
            select: '.another-form-select'
        })
        new SlimSelect({
            select: '.provider-form-select'
        })
    </script>
@endpush
