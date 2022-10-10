<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.Component.Head')
</head>

<body>
    @include('sweetalert::alert')
    <div id="app">
        @include('Admin.Component.Sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@yield('title')</h3>
                            <p class="text-subtitle text-muted">@yield('description')</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('breadcumb-title')
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        @yield('content')
                    </div>

                </section>
            </div>

            @include('Admin.Component.Footer')
        </div>
    </div>
    @include('Admin.Component.Script')
    @yield('opsionalJS')
    @stack('chart')
    @stack('js')
</body>

</html>
