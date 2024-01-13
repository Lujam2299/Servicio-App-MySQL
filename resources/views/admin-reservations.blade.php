<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <title>Servicio - App</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex flex-col h-screen bg-gray-100 dark:bg-gray-900">
    <header class="flex items-center justify-between px-6 py-4 shadow-lg shadow-md dark:bg-gray-800">
      <div class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Panel de Administración</div>
      <div class="flex items-center space-x-3">
        <span class="text-gray-700 dark:text-gray-200">Hola, Usuario</span>
        <Button class="text-sm" variant="outline">
          Cerrar Sesión
        </Button>
      </div>
    </header>
    <main class="flex flex-1 overflow-auto">
      <nav class="flex flex-col shadow-lg shadow-md dark:bg-gray-800 w-64">
        <div class="flex items-center justify-center mt-8">
          <div class="flex items-center">
            <span class="text-gray-600 dark:text-gray-400 text-2xl font-semibold">Tablero</span>
          </div>
        </div>
        <nav class="mt-10 px-6 ">
          <a
            class="mt-3 flex items-center py-2 px-4 text-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"
            href="{{route("admin.index")}}"
          >

            <span class="mx-4 font-medium">Inicio</span>
          </a>
          <a
            href="{{route('admin.create-user')}}"
            class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">

            <span class="mx-4 font-medium">Usuarios</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">

            <span class="mx-4 font-medium">Configuraciones</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="#">

            <span class="mx-4 font-medium">Sala de Conferencias</span>
          </a>
          <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="{{route("admin.solicitudes")}}">

            <span class="mx-4 font-medium">Solicitudes</span>
          </a>
          <a href="{{ route('home.index') }}" class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400">
            <span class="mx-4 font-medium">Cerrar Sesión</span>
        </a>
        </nav>
      </nav>
      <div class="flex flex-col flex-1 p-6 overflow-hidden">
        <div class="flex items-center justify-between">
          <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200">Sección de Solicitudes de Reservaciones</h1>
        </div>
        <div class="flex flex-col mt-6">
          <div class="flex flex-col mt-6">
            <div class="flex flex-col mt-4">
                <p class="font-semibold text-gray-700 dark:text-gray-200">Aquí se mostrarán las solicitudes pendientes de respuesta.</p>
                <br>
                <table class="table table-dark table-striped">
                    <thead class="text-1xl font-semibold text-gray-700 dark:text-gray-200">
                        <tr>
                            <th>No.</th>
                            <th>Sala</th>
                            <th>Fecha de reservación</th>
                            <th>Especificaciones</th>
                            <th>Solicitante</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-1xl  text-gray-700 dark:text-gray-200">
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->nombre_sala }}</td>
                                <td>{{ $reservation->date }}</td>
                                <td>{{ $reservation->message }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>
                                    <button class="btn btn-success">Aceptar</button>
                                    <button class="btn btn-danger">Rechazar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            </div>
        </div>
        </div>
    </main>
  </div>
</body>
</html>

