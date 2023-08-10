<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user"></i>
                User Name
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <!-- User Panel -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{-- <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/user2-160x160.jpg"
                             class="img-circle elevation-2" alt="User Image"> --}}
                    </div>
                    <div class="info">
                        <a href="#" class="d-block font-weight-bold text-dark">User Name</a>
                    </div>
                </div>

                <!-- Dropdown Divider -->
                <div class="dropdown-divider"></div>

                <!-- Logout Link -->
                <a href="#" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
