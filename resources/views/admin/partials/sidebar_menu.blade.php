<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item border-bottom">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{ __('admin.sidebar.dashboard') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('admin.sidebar.users') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.calculation.log') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('admin.sidebar.users_calculation_logs') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.askings') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('admin.sidebar.users_askings') }}
                </p>
            </a>
        </li>
        <li class="nav-item border-bottom">
            <a href="{{ route('user.newsletter') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('admin.breadcrumb.user_newsletter_subscription') }}
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('district.index') }}" class="nav-link">
                <i class="nav-icon fas fa-map"></i>
                <p>
                    {{ __('admin.sidebar.districts') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('finishType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-percent"></i>
                <p>
                    {{ __('admin.sidebar.finish_types') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('propertyType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>
                    {{ __('admin.sidebar.property_type') }}
                </p>
            </a>
        </li>
        <li class="nav-item border-bottom">
            <a href="{{ route('unitType.index') }}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                    {{ __('admin.sidebar.unit_type') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('project.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    {{ __('admin.sidebar.projects') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('unit.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    {{ __('admin.sidebar.units') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('development.index') }}" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>
                    {{ __('admin.sidebar.development_companies') }}
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
