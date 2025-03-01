<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="{{ asset('adminpanel/images/logo.png') }}" alt="">
        <img class="logo-compact" src="{{ asset('adminpanel/images/logo-text.png') }}" alt="">
        <img class="brand-title" src="{{ asset('adminpanel/images/logo-text.png') }}" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger" id="toggle-sidebar">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        <div class="nav-user">
                            <img src="{{ asset(Auth::user()->image ?? 'default-img/User-avatar.jpg') }}" alt="Admin Image" class="rounded-circle" style="width: 40px; height: 40px;">
                            <span class="ml-2">{{ Auth::user()->name }}</span>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account" style="font-size: 30px;"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('admin.profile') }}" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Profile </span>
                            </a>

                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i>
                                <span class="ml-2">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end
***********************************-->
