<!doctype html>
<html lang="en">
    @include('partials._head')
    <body>
        @include('partials._nav')

        </br>

        <div class="container">
            @yield('content')
            @include('partials._footer')
        </div>

        @include('partials._javascripts')
    </body>
</html>