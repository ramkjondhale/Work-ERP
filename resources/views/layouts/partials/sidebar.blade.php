<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="#" class="brand-link">
            <span class="brand-text fw-light">{{ config('app.name') }}</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('preview.dashboard') }}"
                        class="nav-link {{ request()->routeIs('preview.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-gauge"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('preview.projects') }}"
                        class="nav-link {{ request()->routeIs('preview.projects') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-folder-open"></i>
                        <p>Projects</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('preview.board') }}"
                        class="nav-link {{ request()->routeIs('preview.board') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-table-columns"></i>
                        <p>Kanban Board</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('preview.tasks') }}"
                        class="nav-link {{ request()->routeIs('preview.tasks') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-list-check"></i>
                        <p>Tasks</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('preview.users') }}"
                        class="nav-link {{ request()->routeIs('preview.users') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
