@if (session()->has('success'))
    <div class="alert alert-success" role="alert" style="display: none">
        {{ session('success') }}
    </div>
@endif
