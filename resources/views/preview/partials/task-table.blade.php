<table class="table table-striped mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Project</th>
            <th>Assignee</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Due</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($tasks as $task)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $task['title'] }}</td>
                <td>{{ $task['project'] }}</td>
                <td>{{ $task['assignee'] }}</td>
                <td><x-badge :color="$task['priority_color']">{{ $task['priority'] }}</x-badge></td>
                <td><x-badge :color="$task['status_color']">{{ $task['status'] }}</x-badge></td>
                <td>{{ $task['due'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center text-body-secondary">No tasks found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
