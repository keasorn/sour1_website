
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
<head>
	<title>My Awesome Login Page</title>
	<link href="/assets/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/assets/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="/assets/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="/js/limon.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/assets/use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    @yield('css_link')
    <link href="/assets/css/blank_app.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/my_style.css" rel="stylesheet" type="text/css" />
</head>

@yield('css')
<!--Coded with love by Mutiullah Samim-->
<body>
	@yield('content')
</body>

@yield('js')
</html>
