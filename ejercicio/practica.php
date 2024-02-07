<?php
/*
Escenario.
Crea un formulario para pedir los datos siguientes:
nombre - ciudad -
En una lista puedes elegir si el dato que estás guardando es de un
cliente
proveedor
empleado.
al pulsar un botón, puedes mostrar su ficha.
debes utilizar conceptos de POO.
Cuantos más, mejor

Pautas de realización.
Utiliza herencia, tipado, sobrecarga, print vs echo, constructor, destructor ....
*/
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-semibold mb-4">Formulario</h1>
    <form action="actividad_8.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo">Tipo:</label>
            <select name="tipo" id="tipo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="cliente">Cliente</option>
                <option value="proveedor">Proveedor</option>
                <option value="empleado">Empleado</option>
            </select>
        </div>
        <form action="actividad_8.php" method="post" class="flex items-center justify-between">
            <input type="submit" value="Enviar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            <button id="mostrarFicha" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Mostrar Ficha</button>
        </form>
    </form>
</div>
</body>
</html>