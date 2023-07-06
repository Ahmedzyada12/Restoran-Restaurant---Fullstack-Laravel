<nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
    <div class="sb-sidenav-menu bg-success ">
        <div class="nav bg-success text-light bg-success ">
            <div class="sb-sidenav-menu-heading text-light">Core</div>
            <a class="nav-link text-light" href="{{ route('admin.mster') }}">
                <div class="sb-nav-link-icon text-light"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading text-light">Interface</div>
            <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon text-light"><i class="fas fa-columns"></i></div>
                Category
                <div class="sb-sidenav-collapse-arrow text-light"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav text-light">
                    <a class="nav-link text-light" href="{{ route('admin.create') }}">Add Category </a>
                    <a class="nav-link text-light" href="{{ route('admin.index') }}">All Category</a>
                </nav>
            </div>

            <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon text-light"><i class="fas fa-book-open"></i></div>
                Meals
                <div class="sb-sidenav-collapse-arrow text-light"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav text-light">
                    <a class="nav-link text-light" href="{{ route('adminmeal.create') }}">Add meal </a>
                    <a class="nav-link text-light" href="{{ route('adminmeal.index') }}"> All meals</a>
                </nav>

            </div>

            <div class="sb-nav-link-icon text-light">
            <a href="{{ route('adminorder.index') }}" class="nav-link collapsed text-light"><i class="fas fa-columns mx-1"></i> Ordes</a>
            </div>
            <div class="sb-sidenav-menu-heading text-light">deleted</div>
            <a class="nav-link text-light" href="{{ route('admin.trashed') }}">
                <div class="sb-nav-link-icon text-light"><i class="fas fa-chart-area"></i></div>
                Trashed Category
            </a>
            <a class="nav-link text-light " href="{{ route('adminmeal.trshed') }}">
                <div class="sb-nav-link-icon text-light"><i class="fas fa-table"></i></div>
                Trashed Meals
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer text-light bg-success">
        <div class="small text-light">Logged in as:</div>
        Ahmed Zyada
    </div>
</nav>
