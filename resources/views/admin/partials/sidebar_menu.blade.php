<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{ __('admin.sidebar.dashboard') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('admin.sidebar.users') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.calculation.log') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('admin.sidebar.users_calculation_logs') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('development.index') }}" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>
                    {{ __('admin.sidebar.development_companies') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('district.index') }}" class="nav-link">
                <i class="nav-icon fas fa-map"></i>
                <p>
                    {{ __('admin.sidebar.districts') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('finishType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-percent"></i>
                <p>
                    {{ __('admin.sidebar.finish_types') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('propertyType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>
                    {{ __('admin.sidebar.property_type') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('unitType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                    {{ __('admin.sidebar.unit_type') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('property.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    {{ __('admin.sidebar.projects') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
