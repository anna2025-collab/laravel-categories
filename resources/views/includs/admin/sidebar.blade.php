<li class="nav-item menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon bi bi-speedometer"></i>
        <p>
            Dashboard
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="./index.html" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="index2.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="index3.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-header">ADMIN PANEL</li>
<li class="nav-item">
    <a href="docs/introduction.html" class="nav-link">
        <i class="nav-icon bi bi-file-text"></i>
        <p>POSTS
            <span class="badge badge-info right">{{ $posts->count() }}</span>
        </p>

    </a>
</li>
