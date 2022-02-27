@extends('layouts.app', ['page' => __('User Management'), 'pageSlug' => 'users-list', 'section' => 'users'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Users') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @include('alerts.success') --}}

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr @if ($user->trashed()) style="background: #f1f1f1" @endif>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                        </td>
                                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="td-actions text-right">

                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit User">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            @if ($user->trashed())
                                                <form action="{{ route('users.restore', $user->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('put')
                                                    <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                        data-placement="bottom" title="Enable User"
                                                        onclick="confirm('Are you sure you want to enable this user? ') ? this.parentElement.submit() : ''">
                                                        <i class="tim-icons icon-check-2"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('users.destroy', $user) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                        data-placement="bottom" title="Disable User"
                                                        onclick="confirm('Are you sure you want to disable this user? ') ? this.parentElement.submit() : ''">
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
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{-- {{ $users->links() }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
