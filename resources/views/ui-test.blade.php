@extends('layouts.app')

@section('title', 'UI Test')
@section('page_title', 'UI Test')

@section('content')
    <div class="card">
        <div class="card-body">
            <p>This card is from AdminLTE (Bootstrap).</p>
            <button class="btn btn-primary">
                <i class="fa-solid fa-check"></i> Bootstrap button
            </button>
            <p class="mt-3 text-blue-600 font-bold">This text is from Tailwind.</p>
        </div>
    </div>
@endsection
