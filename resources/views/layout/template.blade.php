<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
<head>
    @extends('layout.head')
    <title>
    GKI Cikarang - @yield('title')
    </title>
</head>

<body>
    <!-- Navigasi -->
    <header>
        @extends('layout.navigasi')
    </header>

    <div class="content">
        @section('content')
    </div>

    @extends('layout.script')

</body>

</html>
