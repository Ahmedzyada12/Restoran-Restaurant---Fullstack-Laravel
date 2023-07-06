@include('admin.nav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">

                @include('admin.siad')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>

@include('admin.footer')
