@extends("layout.layout")

@section("content")
<div class="flex justify-center gap-3">
  <a href="{{route("auth.students")}}" class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2 text-xl">Alumno - CESA</a>
  <a class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2 text-xl">Docente</a>
  <a href="{{route("auth.admin")}}" class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2 text-xl">Administrador</a>
</div>
<form class="mt-8 border p-3">
  <label class="block text-lg font-medium text-blue-700" for="email">
    Correo electrónico
  </label>
  <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="email" placeholder="19690395@tecvalles.mx" type="email" />
  <label class="block text-lg font-medium text-blue-700" for="password">
    Contraseña
  </label>
  <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="password" placeholder="••••••" type="password" />
  <Button class="w-full bg-blue-700 text-white hover:bg-blue-800 rounded-lg p-2 text-lg">Iniciar sesión</Button>
</form>
</div>
@endsection