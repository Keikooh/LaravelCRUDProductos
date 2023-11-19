<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRUD PRODUCTOS</title>


    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('partials.navegacion')

    @if (session('status'))
        <div class="container mt-3" id="statusMessage">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
        <script>
            setTimeout(function() {
                var statusMessage = document.getElementById('statusMessage');
                if (statusMessage) {
                    statusMessage.classList.add('hidden');
                    setTimeout(function() {
                        statusMessage.style.display = 'none';
                    }, 500);

                }
            }, 3000);
        </script>
    @endif
    
    @yield('content')
    @yield('js')


    
</body>

</html>
