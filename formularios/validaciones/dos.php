<?php
$provincias = [
    'Almeria',
    'Cadiz',
    'Cordoba',
    'Granada',
    'Huelva',
    'Jaen',
    'Malaga',
    'Sevilla',
    'Madrid'
];
$aficiones = ['Cine', 'Deportes', 'Lectura', 'Videojuegos', 'Programacion', 'Otras'];
$colores = ['Rojo', 'Verde', 'Azul', 'Blanco', 'Negro', 'Otros'];
?>
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
    <div class="w-1/2 mx-auto bg-white p-6 rounded-xl shadow-2xl">
        <form method="POST" action="action2.php">
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
                    placeholder="Ingresa tu nombre"
                    >
            </div>
            <!-- Campo email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="correo@correo.es"
                    >
            </div>
            <!-- campo pass -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="Ingresa tu contraseña">
            </div>
            <!-- Precio -->
            <div class="mb-4">
                <label for="pvp" class="block text-sm font-medium text-gray-700 mb-1">
                    Precio (€)
                </label>
                <input
                    type="number"
                    id="pvp"
                    name="pvp"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="Ingresa el precio"
                    step="0.01"
                    min="1"
                    max="10000">
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
            <!-- Select -->
            <div class="mb-4">
                <select name="provincias" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 resize-vertical">
                    <option>___ Selecciona una provincia ___</option>
                    <?php foreach ($provincias as $item): ?>
                        <option><?= $item ?></option>;
                    <?php endforeach; ?>
                </select>

            </div>
            <!-- campos de tipo checkbox -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Aficiones</label>
                <div class="flex space-x-6">
                    <?php foreach ($aficiones as $afi): ?>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="aficiones[]" value="<?= $afi ?>" class="w-4 h-4 text-blue-600 rounded focus:ring focus:ring-blue-300">
                            <span><?= $afi ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Colores -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Colores</label>
                <div class="flex space-x-6">
                    <?php foreach ($colores as $color): ?>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="color" value="<?= $color ?>" class="w-4 h-4 text-blue-600 focus:ring focus:ring-blue-300">
                            <span><?= $color ?></span>
                        </label>
                    <?php endforeach; ?>

                </div>
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