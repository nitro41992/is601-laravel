<!doctype html>
<html lang="en">
<head>
        @include('includes.head')
        @include('includes.header')
</head>
<body>
<div class="container">

    <main role="main">
        @yield('content')
    </main>
</div>
<footer class="container-fluid bg-dark text-white text-justify">
    <div class="container">
        @include('includes.footer')
    </div>
</footer>
</body>
</html>