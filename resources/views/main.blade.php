<!DOCTYPE html>
<html lang="en">
    <head>
        @include('component._head')
    </head>
    @include('component._navi') <!-- leads to _navi.blade.php in component folder in views-->
    <body>
        <div class="container">
            @yield('content')
            @include('component._footer')
        </div>
        @include('component._js')
        @yield('scripts')
    </body>

</html>