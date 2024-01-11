@extends('layout.layout-admin-dashboard')

@section('content-admin-dashboard')
<div class="flex items-center justify-between w-full md:w-1/2">
  <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200">Formulario de Usuarios</h1>
</div>
<form class="flex flex-col mt-6 w-full md:w-1/2">
  <div class="flex items-center justify-between text-gray-500 dark:text-gray-400">
    <h2 class="text-lg">Información del Usuario</h2>
  </div>
  <div class="flex flex-col mt-4">
    <span class="text-lg text-gray-700 dark:text-gray-200">Número de Control</span>
    <Input
      class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
      type="text"
    />
  </div>
  <div class="flex flex-col mt-4">
    <span class="text-lg text-gray-700 dark:text-gray-200">Correo Electrónico</span>
    <Input
      class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
      type="email"
    />
  </div>
  <div class="flex flex-col mt-4">
    <span class="text-lg text-gray-700 dark:text-gray-200">Contraseña</span>
    <Input
      class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
      type="password"
    />
  </div>
  <div class="flex justify-end mt-6">
    <Button
      class="bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg hover:bg-purple-500 transition duration-200"
      variant="solid"
    >
      Crear Usuario
    </Button>
  </div>
</form>
@endsection