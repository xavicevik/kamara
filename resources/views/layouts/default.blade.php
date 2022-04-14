<!DOCTYPE html>
<html lang="es">

<head>
    @include('includes.head')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<div id="app">
    <header class="app-header navbar">
        @include('includes.header')
    </header>

    <div class="app-body">
        @include('layouts.sidebar')
        <!-- Contenido Principal -->
        @yield('contenido')
    <!-- /Fin del contenido principal -->
    </div>

</div>

<footer class="app-footer">
    @include('includes.footer')
</footer>

<!-- Bootstrap and necessary plugins -->
<script src="js/app.js"></script>
<script src="js/plantilla.js"></script>

</body>

</html>
