<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    
    @include('partials/nav')

    @include('partials/jumbo')
    
    @yield('content')

    @include('partials/linksSection')

    @include('partials/footer')
    
</body>
</html>