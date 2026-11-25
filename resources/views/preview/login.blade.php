@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="card shadow" style="width: 380px;">
        <div class="card-body p-4">
            <h4 class="text-center mb-4">{{ config('app.name') }}</h4>

            <form method="POST" action="#">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="fa-solid fa-right-to-bracket"></i> Sign in
                </button>
            </form>
        </div>
    </div>
@endsection
