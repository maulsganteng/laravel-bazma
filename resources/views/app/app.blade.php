@include('app.inc.header')

<body>
    <div class="page">
        @if (Session::has('succes'))
            <div class="pt-3">
                <div class="alert alert-Succes">
                    {{ Session::get('succes') }}
                </div>
            </div>
        @endif
        <!-- Navbar -->
        @include('app.inc.menu')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                @yield('content')
            </div>
            @include('app.inc.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
</body>

</html>
