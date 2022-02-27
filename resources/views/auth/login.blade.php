@extends('layouts.auth')

@section('content')
    <div class="fixed-background d-flex justify-content-center align-items-center">
        <div class="col-7 bg-white card row" style="height: 70vh">
            <div class="col-7 bg-primary h-100"></div>
            <div class="col-5 h-100 p-3">
                <h1 class="my-4 py-3">Lexus Collections</h1>
                <h4 class="my-2">Login</h4>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" id="" class="form-control" placeholder="email" autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" id="" class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection