<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2efb80128a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>User Add</title>
</head>
<body>
    <main>
        <div class= "mx-auto mt-8 bg-white px-8 py-4  rounded-lg shadow w-[45%]">
            <div class="flex justify-end">
                <a href="{{route('listaUsuarios')}}" class=""><button
                        class="bg-[#84b6f4] py-2 px-3 rounded-lg text-white font-semibold capitalize hover:bg-[#5589c4]"> <i
                            class="fa-solid fa-list pr-2"></i>lista de usuarios</button></a>
            </div>
            <h1 class="text-2xl font-bold mb-4">Agregar Usuario</h1>

            <div class="overflow-x-auto rounded-lg w-[75%]">
                <form action="{{route('agregarUsuario')}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nombres" class="block text-gray-700 text-sm font-bold mb-2">Nombres</label>
                        <input type="text" id="nombres" name="nombre"
                            class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            placeholder="Ingrese su nombre" required>
                    </div>

                    <div class="mb-4">
                        <label for="apellidos"
                            class="block text-gray-700 text-sm font-bold mb-2 capitalize">apellidos</label>
                        <input type="text" id="apellidos" name="apellido"
                            class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            placeholder="Ingrese su apellido" required>
                    </div>

                    <div class="mb-4">
                        <label for="email"
                            class="block text-gray-700 text-sm font-bold mb-2 capitalize">Email</label>
                        <input type="text" id="email" name="email"
                            class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            placeholder="Ingrese su email" required>
                    </div>

                    <div class="mb-4">
                        <label for="contrasena"
                            class="block text-gray-700 text-sm font-bold mb-2 capitalize">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena"
                            class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            placeholder="Contraseña" required>
                    </div>


                    <div class="mb-4 flex justify-end">
                        <button type="submit"
                            class="w-[10rem] bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-blue-700">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
