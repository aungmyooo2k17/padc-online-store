<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body id="page-top">
    <div id="wrapper">

            @include('includes.header')

        <div id="main">

            @yield('content')

            

        </div>

        <!-- <footer>
            @include('includes.footer')
        </footer> -->

    </div>
</body>
    @include('includes.footer-scripts')
</html>