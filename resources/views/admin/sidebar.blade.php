<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Category Logo -->
    <a href="#" class="Category-link">
        <!-- <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Sunglases Logo" class="Category-image img-circle elevation-3"
            style="opacity: .2">
        <span class="Category-text font-weight-light">Sunglases</span>
    </a> -->
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/download.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                    <a href="{{ url('/admin/dashboard') }}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                    <ul class="nav ">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-palette nav-icon"></i>
                                <p>
                                    Colors
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/admin/colors/Addcolor') }}" class="nav-link">
                                        <i class=" fa fa-plus-square nav-icon"></i>
                                        <p>Add Color</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/admin/colors/list') }}" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Colors</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav ">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-list-alt nav-icon"></i>
                                        <p>Category<i class="fas fa-angle-left right"></i> </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/brands/Addbrand') }}" class="nav-link">
                                                <i class="fa fa-plus-square nav-icon"></i>
                                                <p>Add Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/brands/brandlist') }}" class="nav-link">
                                                <i class="fa fa-list nav-icon"></i>
                                                <p>Category</p>
                                            </a>
                                        </li>

                                    </ul>
                                    <ul class="nav ">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                            <i class="fas fa-glasses"></i>
                                                <p>Products<i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('/admin/product/addproduct') }}"
                                                        class="nav-link">
                                                        <i class="fa fa-plus-square nav-icon"></i>
                                                        <p>Add products</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('/admin/product/display') }}"
                                                        class="nav-link">
                                                        {{-- <i class="far fa-list-alt nav-icon"></i> --}}
                                                        <i class="fa fa-list nav-icon"></i>
                                                        <p>products</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav ">
                                             <li class="nav-item">
                                                    <a href="{{ url('color') }}" class="nav-link ">
                                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                                        <p> Order
                                                        <i class="fas fa-angle-left right"></i>
                                                        </p> 
                                                    </a>
                                                    <ul class="nav nav-treeview">   
                                                        <li class="nav-item">
                                                        <a href="{{ url('/admin/orders/') }}" class="nav-link">
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fas fa-list"></i>
                                                            <p>List</p>
                                                        </a>
                                                        </li>
                                                        </ul>
                                            
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                class="nav-link ">
                                                <i class="nav-icon fa fa-power-off"></i>
                                                <p>Logout</p>
                                            </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                            </ul>
                        </li>
                    </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
