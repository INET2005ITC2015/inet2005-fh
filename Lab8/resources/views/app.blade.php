<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        @include ('flash::message')

        @yield('content')


    </div>

    @yield('footer')

</body>
</html>