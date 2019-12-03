<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('articles.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Articles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('categories.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('statuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('statuses.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Statuses</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('tags.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tags</span>
    </a>
</li>
