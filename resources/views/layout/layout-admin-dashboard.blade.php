<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Servicio - App</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex flex-col h-screen bg-gray-100 dark:bg-gray-900">
    <header class="flex items-center justify-between px-6 py-4 bg-white shadow-md dark:bg-gray-800">
      <div class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Panel de Administración</div>
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
            href="#"
          >
            
            <span class="mx-4 font-medium">Inicio</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">
            
            <span class="mx-4 font-medium">Usuarios</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">
            
            <span class="mx-4 font-medium">Configuraciones</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">
            
            <span class="mx-4 font-medium">Sala de Conferencias</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">
            
            <span class="mx-4 font-medium">Solicitudes</span>
          </a>
        </nav>
      </nav>
      <div class="flex flex-col flex-1 p-6 overflow-hidden">
        @yield('content-admin-dashboard')
      </div>
    </main>
  </div>
</body>
</html>