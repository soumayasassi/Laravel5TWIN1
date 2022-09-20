<html>



<head>
    <title>@yield('titre')Laravel Application </title>
{{--fichiers css--}}
    {{--fichiers js--}}
</head>
<body>
<header>@yield('header')</header>
<nav>@yield('nav')</nav>
<div>
    @yield('content')
    Web page content
</div>
<footer>@yield('footer')</footer>
</body>
</html>
