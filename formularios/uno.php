<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="bg-teal-200">
    <h1 class="text-2xl text-center my-4">Formularios en PHP</h1>
    <div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-2xl">
        <form>
            <!-- Campo Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                    Nombre
                </label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="Ingresa tu nombre">
            </div>

            <!-- Campo Descripción -->
            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">
                    Descripción
                </label>
                <textarea
                    id="descripcion"
                    name="descripcion"
                    rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 resize-vertical"
                    placeholder="Escribe una descripción..."></textarea>
            </div>
            <!-- Boton reset y enviar -->
            <div class="flex flex-row-reverse">
                <button type="submit" class="ml-4 p-2 rounded-lg bg-green-400 text-white font-bold hover:bg-green-600">Enviar</button>
                <button type="reset" class="ml-4 p-2 rounded-lg bg-red-400 text-white font-bold hover:bg-red-600">Limpiar</button>
            </div>
        </form>
    </div>

</body>

</html>