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
        <div class="flex justify-center gap-3">
          <a  class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2">Alumno - CESA</a>
          <a class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2">Docente</a>
          <a  class="bg-blue-700 text-white hover:bg-blue-800 cursor-pointer rounded-lg p-2">Administrador</a>
        </div>
        <div class="mt-8 border p-3">
          <label class="block text-lg font-medium text-blue-700" for="controlNumber">
            Número de control
          </label>
          <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="controlNumber" placeholder="19690395" type="text" />
          <label class="block text-lg font-medium text-blue-700" for="password">
            Contraseña
          </label>
          <Input class="mt-2 mb-4 border-blue-300 p-2 w-full rounded-md" id="password" placeholder="••••••" type="password" />
          <Button class="w-full bg-blue-700 text-white hover:bg-blue-800 rounded-lg p-2">Iniciar sesión</Button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>