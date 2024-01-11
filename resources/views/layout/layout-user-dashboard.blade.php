<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Servicio-App</title>
</head>
<body>
    <div class="min-h-screen bg-blue-50 flex justify-center items-center rounded-sm">
            @yield('content')
    </div>
</body>
</html>
