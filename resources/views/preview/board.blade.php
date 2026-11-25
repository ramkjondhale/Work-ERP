@extends('layouts.app')

@section('title', 'Kanban Board')
@section('page_title', 'Kanban Board')

@section('content')
    <div class="row row-cols-1 row-cols-lg-5 g-3">
        @foreach ($statuses as $status)
            <div class="col">
                <div class="card bg-body-secondary h-100">
                    <div class="card-header fw-semibold">
                        {{ $status }}
                        <span class="badge text-bg-dark float-end">{{ $grouped->get($status, collect())->count() }}</span>
                    </div>
                    <div class="card-body p-2">
                        @forelse ($grouped->get($status, []) as $task)
                            <div class="card mb-2">
                                <div class="card-body p-2">
                                    <div class="fw-semibold">{{ $task['title'] }}</div>
                                    <small class="text-body-secondary">{{ $task['project'] }}</small>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <x-badge :color="$task['priority_color']">{{ $task['priority'] }}</x-badge>
                                        <small>{{ $task['assignee'] }}</small>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-body-secondary mb-0">No tasks</p>
                        @endforelse
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
