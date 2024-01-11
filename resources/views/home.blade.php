@extends('layout.layout')


@section("content")
<h2 class="text-black "><b>SISTEMA DE GESTION DE ESTANCIAS</b></h2><br>
<div class="flex justify-center gap-3">
  <a href="{{route("auth.students")}}" class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2 text-xl">Alumno - CESA</a>
  <a href="{{route("auth.docente")}}" class="text-black border border-blue-600 cursor-pointer rounded-lg p-2 text-xl">Docente</a>
  <a href="{{route("auth.admin")}}" class="text-black border border-blue-600 cursor-pointer rounded-lg p-2 text-xl">Administrador</a>
</div>
<form
  class="mt-8 border p-3"
  >
  @csrf
  <label class="block text-lg font-medium text-blue-700" for="controlNumber">
    Número de control
  </label>
  <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="controlNumber" placeholder="19690001" type="number" min="1" max="8"/>
  <label class="block text-lg font-medium text-blue-700" for="password">
    Contraseña
  </label>
  <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="password" placeholder="••••••" type="password" />
  <Button class="w-full bg-blue-700 text-white hover:bg-blue-800 rounded-lg p-2 text-lg">Iniciar sesión</Button>
</form>
</div>
@endsection
