<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Desa Cikembulan</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-bms.png') }}" type="image/x-icon">

    @include('templates.partials.styles')

    <style>
        .bg-sidebar { background: #2563eb; }
        .cta-btn { color: #2563eb; }
        .upgrade-btn { background: #1d4ed8; }
        .upgrade-btn:hover { background: #1e40af; }
        .active-nav-link { background: #1d4ed8; border-left-width: 4px; border-color: white; }
        .nav-item:hover { background: #1d4ed8; }
        .account-link:hover { background: #2563eb; }
    </style>
</head>
<body class="bg-slate-100 flex">
    @include('admin.templates.partials.sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('admin.templates.partials.header')

        <!-- Mobile Header & Nav -->
        @include('admin.templates.partials.mobile_header')
        
        {{-- Content --}}
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            {{-- @include('admin.dashboard.index') --}}
            <main class="h-full pb-16 overflow-y-auto">
                @yield('content-admin')
            </main>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    
</body>
</html>