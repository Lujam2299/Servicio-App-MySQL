@extends('layout.layout-admin-dashboard')

@section('content-admin-dashboard')
<div class="flex items-center justify-center w-full md:w-1/2 mt-5 p-5">
  <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200">Formulario de Usuarios</h1>
</div>
<form class="flex flex-col mt-6 w-full md:w-1/2" method="POST" action="{{route('admin.create-user.store')}}">
  @csrf
  <div class="flex items-center justify-between text-gray-500 dark:text-gray-400">
    <h2 class="text-lg">Información del Usuario</h2>
  </div>
  <div class="flex flex-col mt-4">
    <label for="control_number" class="text-lg text-gray-700 dark:text-gray-200">Número de Control</label>
    <Input
      class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
      type="text"
      name="control_number"
      id="control_number"
    />
  </div>
  <div class="flex flex-col mt-4">
    <label for="email" class="text-lg text-gray-700 dark:text-gray-200">Correo Electrónico</label>
    <Input
      class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
      type="email"
      name="email"
      id="email"
    />
  </div>
  <div class="flex flex-col mt-4">
    <label for="password" class="text-lg text-gray-700 dark:text-gray-200">Contraseña</label>
    <Input
      class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
      type="password"
      name="password"
      id="password"
    />
  </div>
  <div class="flex justify-end mt-6">
    <Button
      type="submit"
      class="bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg hover:bg-purple-500 transition duration-200 p-3"
    >
      Crear Usuario
    </Button>
  </div>
</form>
@endsection
