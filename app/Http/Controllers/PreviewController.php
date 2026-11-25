<?php

namespace App\Http\Controllers;

class PreviewController extends Controller
{
    public function login()
    {
        return view('preview.login');
    }

    public function dashboard()
    {
        $stats = [
            ['label' => 'Projects', 'value' => 4, 'icon' => 'fa-folder-open', 'color' => 'primary'],
            ['label' => 'Open Tasks', 'value' => 18, 'icon' => 'fa-list-check', 'color' => 'info'],
            ['label' => 'Waiting Approval', 'value' => 5, 'icon' => 'fa-hourglass-half', 'color' => 'warning'],
            ['label' => 'Completed', 'value' => 42, 'icon' => 'fa-circle-check', 'color' => 'success'],
        ];

        return view('preview.dashboard', [
            'stats' => $stats,
            'recentTasks' => array_slice($this->tasks(), 0, 4),
        ]);
    }

    public function projects()
    {
        return view('preview.projects', ['projects' => $this->projectsList()]);
    }

    public function board()
    {
        $statuses = ['To Do', 'In Progress', 'In Review', 'Waiting Approval', 'Completed'];
        $grouped = collect($this->tasks())->groupBy('status');

        return view('preview.board', [
            'statuses' => $statuses,
            'grouped' => $grouped,
        ]);
    }

    public function tasks_page()
    {
        return view('preview.tasks', ['tasks' => $this->tasks()]);
    }

    public function users()
    {
        return view('preview.users', ['users' => $this->usersList()]);
    }

    private function projectsList(): array
    {
        return [
            ['id' => 1, 'name' => 'Website Redesign', 'manager' => 'Priya Sharma', 'status' => 'In Progress', 'color' => 'info', 'progress' => 60],
            ['id' => 2, 'name' => 'Inventory Module', 'manager' => 'Priya Sharma', 'status' => 'Created', 'color' => 'secondary', 'progress' => 10],
            ['id' => 3, 'name' => 'Mobile App', 'manager' => 'Karan Mehta', 'status' => 'In Progress', 'color' => 'info', 'progress' => 35],
            ['id' => 4, 'name' => 'Reports Module', 'manager' => 'Karan Mehta', 'status' => 'Completed', 'color' => 'success', 'progress' => 100],
        ];
    }

    private function tasks(): array
    {
        return [
            ['id' => 1, 'title' => 'Design login screen', 'project' => 'Website Redesign', 'assignee' => 'Amit Patil', 'priority' => 'High', 'priority_color' => 'danger', 'status' => 'In Progress', 'status_color' => 'info', 'due' => '2026-12-02'],
            ['id' => 2, 'title' => 'Create database tables', 'project' => 'Inventory Module', 'assignee' => 'Neha Joshi', 'priority' => 'Medium', 'priority_color' => 'warning', 'status' => 'To Do', 'status_color' => 'secondary', 'due' => '2026-12-05'],
            ['id' => 3, 'title' => 'Write API docs', 'project' => 'Mobile App', 'assignee' => 'Rahul Desai', 'priority' => 'Low', 'priority_color' => 'secondary', 'status' => 'In Review', 'status_color' => 'primary', 'due' => '2026-12-08'],
            ['id' => 4, 'title' => 'Fix report export bug', 'project' => 'Reports Module', 'assignee' => 'Sneha Kulkarni', 'priority' => 'High', 'priority_color' => 'danger', 'status' => 'Waiting Approval', 'status_color' => 'warning', 'due' => '2026-11-30'],
            ['id' => 5, 'title' => 'Set up email alerts', 'project' => 'Inventory Module', 'assignee' => 'Amit Patil', 'priority' => 'Medium', 'priority_color' => 'warning', 'status' => 'Completed', 'status_color' => 'success', 'due' => '2026-11-25'],
            ['id' => 6, 'title' => 'Prepare test data', 'project' => 'Mobile App', 'assignee' => 'Neha Joshi', 'priority' => 'Low', 'priority_color' => 'secondary', 'status' => 'To Do', 'status_color' => 'secondary', 'due' => '2026-12-10'],
        ];
    }

    private function usersList(): array
    {
        return [
            ['id' => 1, 'name' => 'Rohan Kapoor', 'email' => 'cto@example.com', 'role' => 'CTO', 'manager' => '-'],
            ['id' => 2, 'name' => 'Anita Rao', 'email' => 'hr@example.com', 'role' => 'HR', 'manager' => '-'],
            ['id' => 3, 'name' => 'Priya Sharma', 'email' => 'priya@example.com', 'role' => 'Manager', 'manager' => '-'],
            ['id' => 4, 'name' => 'Vikram Singh', 'email' => 'vikram@example.com', 'role' => 'TL', 'manager' => 'Priya Sharma'],
            ['id' => 5, 'name' => 'Amit Patil', 'email' => 'amit@example.com', 'role' => 'Developer', 'manager' => 'Priya Sharma'],
        ];
    }
}
