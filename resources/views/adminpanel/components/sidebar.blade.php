    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="quixnav">
        <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label first" style="color: white;">Main Menu</li>

                <!-- sidebar all menus Start -->

                <li>
                    <a href="{{ route('admin-index-page') }}" aria-expanded="false">
                        <i class="icon icon-single-04"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog-list') }}" aria-expanded="false">
                        <i class="icon icon-single-04"></i>
                        <span class="nav-text">Blog Managment</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('list-record') }}" aria-expanded="false">
                        <i class="icon icon-single-copy-06"></i>
                        <span class="nav-text">Testing CURD</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact-list') }}" aria-expanded="false">
                        <i class="icon icon-single-copy-06"></i>
                        <span class="nav-text">User Contact List</span>
                    </a>
                </li>

                <!-- sidebar all menus End -->
            </ul>
        </div>
    </div>
    <!--**********************************
            Sidebar end
        ***********************************-->
