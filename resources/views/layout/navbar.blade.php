<div class="sidenav shadow">
    <div class="text-center pt-0 pt-lg-3 pb-0 pb-lg-3">
        <div class="d-none d-lg-inline-block">
            <a class="logo text-uppercase" href="#">
                <img src="/assets/images/logo-sm.png" alt="logo" height="30">
                <img src="/assets/images/logo.png" alt="logo" height="18">
            </a>
        </div>
    </div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom text-white sticky">
        <div class="container">
            <a class="mobile-re text-uppercase d-inline-block d-lg-none" href="#"><img src="/assets/images/logo.png" alt="logo" height="20"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('products.index') }}"><i class="mdi mdi-account-circle-outline mr-2"></i>Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}"><i class="mdi mdi-sitemap mr-2"></i>Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.index') }}"><i class="mdi mdi-sitemap mr-2"></i>Users</a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="mdi mdi-sitemap mr-2">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END-->
</div>
