<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('home') }}">{{ config('app.name') }}</a>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fa fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i>
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               @guest
                   @if (Route::has('login'))
                     <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                   @endif

                   @if (Route::has('register'))
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                   @endif

                   @else
                       <li>
                           <a class="dropdown-item" href="#!" onclick="document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-fw mr-2"></i>
                            <span>Log Out</span>
                        </a>
                           
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('twofactauth') }}">
                            <i class="fa fa-check-double mr-2"></i>                         
                            <span>Two Fact Auth</span>
                     </a>
                        
                 </li>
                 <li>
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="fa fa-circle-user mr-2"></i>                         
                        <span>Profile</span>
                 </a>
                    
             </li>
               @endguest

            </ul>
        </li>
    </ul>
    <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="post">
        @csrf
    </form>
</nav>

