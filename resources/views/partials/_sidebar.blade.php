<!-- resources/views/partials/_sidebar.blade.php -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">Leave Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Leave Types Link -->
                <li class="nav-item">
                    <a href="{{ route('leave-types.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Leave Types</p>
                    </a>
                </li>

                <!-- Employees Link -->
                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Employees</p>
                    </a>
                </li>

                <!-- Leave Requests Link -->
                <li class="nav-item">
                    <a href="{{ route('leave-requests.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Leave Requests</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
