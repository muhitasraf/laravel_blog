<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link active" href="#submenu0" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <div id='submenu0' class="collapse sidebar-submenu">
                <a href="{{route('profile')}}" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">Profile</span>
                </a>
                <a href="{{route('edit_profile')}}" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">Edit</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">Tables</span>
                </a>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="list"></span>
                    Category <span class="sr-only">(current)</span>
                </a>
            </li>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">All Category</span>
                </a>
                <a href="{{route('categories.add')}}" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">Create Category</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="shopping-cart"></span>
                    Post <span class="sr-only">(current)</span>
                </a>
            </li>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="{{route('post.create')}}" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">Create Post</span>
                </a>
                <a href="{{route('post.index')}}" class="list-group-item list-group-item-action bg-light text-black">
                    <span class="menu-collapsed">All post</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
