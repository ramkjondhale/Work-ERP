@extends('layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    <div class="row">
        @foreach ($stats as $stat)
            <div class="col-6 col-md-3 mb-3">
                <div class="card text-bg-{{ $stat['color'] }}">
                    <div class="card-body">
                        <h3 class="mb-1">{{ $stat['value'] }}</h3>
                        <p class="mb-0">
                            <i class="fa-solid {{ $stat['icon'] }}"></i> {{ $stat['label'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Tasks</h3>
        </div>
        <div class="card-body p-0">
            @include('preview.partials.task-table', ['tasks' => $recentTasks])
        </div>
    </div>
@endsection
