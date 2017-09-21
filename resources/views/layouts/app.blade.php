<!-- kaustas resources/views/layouts/app.blade.php-->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Siia tuleb sidebar
        @show
        
        <div class="container">
            @yield('content')
        </div>
        <div class="alert alert-danger">
            {{ $slot }}
        </div>
    </body>
</html>