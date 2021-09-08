<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('admin.index') }}">DEVEST - ADMIN DASHBOARD</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                @else

                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome !!</a>
                </li>

                @endguest


            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->



    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

    @guest
            <div class="user-info">
            </div>

    @else

        <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('users.edit', ['user' => Auth::id()] ) }}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>{{ __('Sign out') }}</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @endguest
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{ route('users.index') }}" class="menu-item">
                            <i class="material-icons">manage_accounts</i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('page.index') }}" class="menu-item">
                            <i class="material-icons">edit</i>
                            <span>Edit Pages</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">computer</i>
                            <span>Portfolio</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('portfolio.index') }}">Show all</a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio.create') }}">Add New</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">reviews</i>
                            <span>Client Reviews</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('client.index') }}">Show All</a>
                            </li>
                            <li>
                                <a href="{{ route('client.create') }}">Add New</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">rss_feed</i>
                            <span>Blog</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('blog.index') }}">View All</a>
                            </li>
                            <li>
                                <a href="{{ route('blog.create') }}">Add New</a>
                            </li>

                        </ul>
                    </li>
                     <!--add category-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle" style="margin-bottom:5px;">
                            <i class="material-icons">reviews</i>
                            <span>add category</span>
                        </a>
                        <form class="ml-menu" action="{{route('add_category')}}" method="POST"  style="text-align:center">
                            @csrf
                           <div class="form-group">
                               <input class="form-control" type="text" name="name" placeholder="Category name" autocomplete="off" style="border-bottom: 1px solid #a2a2a2; margin-left: 13px; width: 90%;">
                           </div>
                            <button class="btn btn-primary">Add</button>
                        </form>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}">
                            <i class="material-icons">call</i>
                            <span>Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.index') }}">
                            <i class="material-icons">settings</i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="javascript:void(0);">DEVEST - Admin Dashboard</a>.
                </div>
                <div class="version">
                    <b>By: </b> Anupama Dilshan
                </div>
            </div>
            <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

