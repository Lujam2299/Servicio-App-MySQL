<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/icon.svg" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Servicio-App</title>
</head>
<body>
    <div class="min-h-screen bg-blue-50 flex justify-center items-center rounded-sm">
        <div class="bg-white p-8 rounded-lg shadow-lg flex max-w-4xl w-full items-center">
        <div class="w-1/3 p-4">
        <img
            alt="Illustration"
            class="w-full logo rounded-lg"
            height="200"
            src="/icon.svg"
            width="200"
        />
        </div>
        <div class="w-2/3 p-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
