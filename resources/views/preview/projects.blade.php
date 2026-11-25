@extends('layouts.app')

@section('title', 'Projects')
@section('page_title', 'Projects')

@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Manager</th>
                        <th>Status</th>
                        <th style="width: 25%;">Progress</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project['name'] }}</td>
                            <td>{{ $project['manager'] }}</td>
                            <td><x-badge :color="$project['color']">{{ $project['status'] }}</x-badge></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" style="width: {{ $project['progress'] }}%">
                                        {{ $project['progress'] }}%
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-body-secondary">No projects found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
