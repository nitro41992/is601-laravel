<!doctype html>
<html lang="en">
<head>
        @include('includes.head')
</head>
<body>
<header>
    @include('includes.header')
</header>
<div class="container" style="margin-top: 50px">


    <div id="main" class="row">

        <div id="sidebar" class="col-md-2">
            @include('includes.sidebar')
        </div>

        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>
</div>
<footer class="row">
    <div class="container">
        @include('includes.footer')
    </div>
</footer>
</body>
</html>