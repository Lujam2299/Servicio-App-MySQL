<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @vite('resources/css/app.css')
    <title>Servicio-App</title>
    <style>
        .card {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <div class="flex flex-col h-screen bg-gray-100 dark:bg-gray-900">
        <header class="flex items-center justify-between px-6 py-4 bg-white shadow-md dark:bg-gray-800">
            <div class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Panel de Reservaciones</div>
            <div class="flex items-center space-x-3">
            <span class="text-gray-700 dark:text-gray-200">Hola, Usuario</span>
            <Button class="text-sm" variant="outline">
                Cerrar Sesión
            </Button>
            </div>
        </header>
        <main class="flex flex-1 overflow-auto">
          <nav class="flex flex-col bg-white shadow-lg dark:bg-gray-800 w-64">
            <div class="flex items-center justify-center mt-8">
              <div class="flex items-center">
                <span class="text-gray-600 dark:text-gray-400 text-2xl font-semibold">Tablero</span>
              </div>
            </div>
            <nav class="mt-10 px-6 ">
              <a
                class="mt-3 flex items-center py-2 px-4 text-gray-700 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-gray-200"
                href="{{route("user.main")}}"
              >

                <span class="mx-4 font-medium">Inicio</span>
              </a>
              <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="{{route("user.configuration")}}">

                <span class="mx-4 font-medium">Configuraciones</span>
              </a>
              <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="{{route("user.solicitudes")}}">

                <span class="mx-4 font-medium">Mis solicitudes</span>
              </a>
            </nav>
          </nav>
          <div class="flex flex-col flex-1 p-6 overflow-hidden">
            <div class="flex items-center justify-between">
              <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200">Sección de Solicitudes de Reservas</h1>
            </div>
            <div class="flex flex-col mt-6">
              <div class="flex flex-col mt-6">
                <div class="flex flex-col mt-4">
                    <p class="font-semibold text-gray-700 dark:text-gray-200">Aquí se mostrarán tus solicitudes que hayas realizado.</p>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
