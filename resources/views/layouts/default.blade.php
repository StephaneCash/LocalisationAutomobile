<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{isset($title) ? $title . " | " : ""}} Location automobile</title>
</head>

<style>
    
</style>
<body>

    @include('layouts/partials/nav')
    @include('layouts/partials/upContainer')
    @yield('content')
</body>
</html>