<!-- ============================================================== -->
<!-- toggle and nav items -->
<!-- ============================================================== -->
<ul class="navbar-nav float-left mr-auto ml-3 pl-1">
    <!-- Notification -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
            id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span><i data-feather="bell" class="svg-icon"></i></span>
            <span class="badge badge-primary notify-no rounded-circle">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
            <ul class="list-style-none">

            </ul>
        </div>
    </li>
    <!-- End Notification -->
    <!-- ============================================================== -->
    <!-- create new -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i data-feather="settings" class="svg-icon"></i>
        </a>

    </li>
    <li class="nav-item d-none d-md-block">
        <a class="nav-link" href="javascript:void(0)">
            <div class="customize-input">

            </div>
        </a>
    </li>
</ul>
<!-- ============================================================== -->
<!-- Right side toggle and nav items -->
<!-- ============================================================== -->
<ul class="navbar-nav float-right">
    <!-- ============================================================== -->
    <!-- Search -->
    <!-- ============================================================== -->
    <li class="nav-item d-none d-md-block">
        <a class="nav-link" href="javascript:void(0)">
            <form>
                <div class="customize-input">
                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                        type="search" placeholder="Buscar" aria-label="Search">
                    <i class="form-control-icon" data-feather="search"></i>
                </div>
            </form>
        </a>
    </li>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('icons/boy.png')}}" alt="user" class="rounded-circle"
                width="40">
            <span class="ml-2 d-none d-lg-inline-block"><span>Hola,</span> <span
                    class="text-dark">{{Auth::user()->email}}</span> <i data-feather="chevron-down"
                    class="svg-icon"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                    class="svg-icon mr-2 ml-1"></i>
                    Perfil
            </a>
            <div class="dropdown-divider"></div>
            <form action="{{asset('auth/logout')}}" class="dropdown-item" method="post">
                @csrf
                <button type="submit" class="btn bnt-primary">
                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i> Salir
                </button>
            </form>
        </div>
    </li>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
</ul>
