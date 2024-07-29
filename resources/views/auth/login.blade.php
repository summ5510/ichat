@extends('app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3 class="text-center mb-4">Login to your account</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
                <div class="text-center">
                    <a href="{{ route('register') }}">Don't have an account? Create one here</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
