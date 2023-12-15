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
    <title>User List</title>
</head>

<body>
    <main>
        <div class= "mx-auto mt-8 bg-white p-3  rounded-lg shadow w-[60%]">

            <div class="flex justify-end">
                <a href="{{route('formAgregarUsuario')}}" class=""><button
                        class="bg-[#84b6f4] py-2 px-3 rounded-lg text-white font-semibold capitalize hover:bg-[#5589c4] text-sm">
                        <i class="fa-solid fa-user-plus pr-2"></i>agregar usuario</button></a>
            </div>

            <h1 class="text-xl font-bold mb-4">Tabla de usuarios</h1>

            <div class="overflow-x-auto rounded-lg">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg ">
                    <thead>
                        <tr class="bg-slate-300">
                            <th class="py-2 px-4 border-b text-sm">N°</th>
                            <th class="py-2 px-4 border-b text-sm">Nombre</th>
                            <th class="py-2 px-4 border-b text-sm">Apellido</th>
                            <th class="py-2 px-4 border-b text-sm">E-mail</th>
                            <th class="py-2 px-4 border-b text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($usuarios as $usuario)
                            <tr class="hover:bg-blue-200 cursor-pointer">
                                <td class="py-2 px-4 border-b text-xs font-medium">{{ $enum++ }}</td>
                                <td class="py-2 px-4 border-b text-xs font-medium">{{ $usuario->nombre }}</td>
                                <td class="py-2 px-4 border-b text-xs font-medium">{{ $usuario->apellido }} </td>
                                <td class="py-2 px-4 border-b text-xs font-medium">{{ $usuario->email }}</td>
                                <td class="py-2 px-4 border-b text-lg font-medium text-center"><i
                                        class="fa-regular fa-pen-to-square text-[#84b6f4] pr-2 hover:text-[#5589c4]"></i><i
                                        class="fa-solid fa-trash-arrow-up text-[#ff6961] pl-2 hover:text-[#c94139] "></i>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
