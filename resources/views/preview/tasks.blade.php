@extends('layouts.app')

@section('title', 'Tasks')
@section('page_title', 'Tasks')

@section('content')
    <div class="card">
        <div class="card-body p-0">
            @include('preview.partials.task-table', ['tasks' => $tasks])
        </div>
    </div>
@endsection
