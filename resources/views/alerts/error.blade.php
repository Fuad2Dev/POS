@if (session()->has('error'))
    <div class="alert alert-danger" role="alert" style="display: none">
        {{ session('error') }}
    </div>
@endif
