<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link has-dropdown">
            <i class="fas fa-fire"></i>
            <span>Dashboard</span>
        </a>
        <ul class="dropdown-menu">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">General Dashboard</a>
            </li>
            <li class="{{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('posts.index') }}">Postingan</a>
            </li>
        </ul>
        </li>
        <li class="menu-header">Administrator</li>
            <li class="{{ Request::is('dashboard/categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}"><i class="far fa-square"></i> <span>Kategori</span>
                </a>
            </li>
        </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>        </aside>
</div>