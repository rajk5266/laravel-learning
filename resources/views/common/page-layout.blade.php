<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default')</title>
    @include('common/header')
</head>

<body>
    <header>
    @include('common/navbar')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        Common footer content
    </footer>

</body>

</html>