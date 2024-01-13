@extends("layout.layout")

@section("content")
<h2 class="text-black "><b>SISTEMA DE GESTION DE ESTANCIAS</b></h2><br>
<div class="flex justify-center gap-3">
  <a href="{{route("auth.students")}}" class="text-black border border-blue-600 cursor-pointer rounded-lg p-2 text-xl">Alumno - CESA</a>
  <a  href="{{route("auth.docente")}}" class="text-black border border-blue-600 cursor-pointer rounded-lg p-2 text-xl">Docente</a>
  <a href="{{route("auth.admin")}}" class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2 text-xl">Administrador</a>
</div>
<form class="mt-8 border p-3"
  action="{{route("auth.admin.store")}}"
  method="POST"
  >
  @csrf
  @if (session('status'))
    <span class="text-red-500 text-xs">{{session('status')}}  </span>
  @endif
  <label class="block text-lg font-medium text-blue-700" for="email">
    Correo electrónico
  </label>
  <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="email" name="email" placeholder="19690395@tecvalles.mx" type="email" />
  <label class="block text-lg font-medium text-blue-700" for="password">
    Contraseña
  </label>
  <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="password" name="password" placeholder="••••••" type="password" />
  <input type="submit" value="Iniciar Sesión" class="w-full bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2 text-lg">
</form>
</div>
@endsection
