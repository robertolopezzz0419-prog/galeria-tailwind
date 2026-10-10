<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    @php
        $fotos = [
            ['titulo' => 'Paisaje Natural', 'desc' => 'Una hermosa vista de la naturaleza.', 'img' => asset('images/paisaje.jpg')],
            ['titulo' => 'Montañas', 'desc' => 'Paisajes increíbles rodeados de montañas.', 'img' => asset('images/montanas.jpg')],
            ['titulo' => 'Bosque', 'desc' => 'Un tranquilo bosque rodeado de naturaleza.', 'img' => asset('images/bosque.jpg')],
            ['titulo' => 'Playa', 'desc' => 'Un lugar perfecto para descansar.', 'img' => asset('images/playa.jpg')],
            ['titulo' => 'Ciudad', 'desc' => 'Arquitectura moderna en una gran ciudad.', 'img' => asset('images/ciudad.jpg')],
            ['titulo' => 'Aventura', 'desc' => 'Explora nuevos lugares y vive nuevas experiencias.', 'img' => asset('images/aventura.jpg')],
        ];
    @endphp

    <nav class="bg-gray-900 text-white">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#" class="text-xl font-bold">Galería</a>

            <ul class="hidden md:flex gap-6 text-sm">
                <li><a href="#" class="hover:text-gray-300">Inicio</a></li>
                <li><a href="#" class="hover:text-gray-300">Galería</a></li>
                <li><a href="#" class="hover:text-gray-300">Nosotros</a></li>
                <li><a href="#" class="hover:text-gray-300">Contacto</a></li>
            </ul>

            <button id="menu-btn" class="md:hidden text-2xl" aria-label="Abrir menú">☰</button>
        </div>

        <ul id="menu-movil" class="hidden md:hidden px-4 pb-3 space-y-2 text-sm">
            <li><a href="#" class="block py-1">Inicio</a></li>
            <li><a href="#" class="block py-1">Galería</a></li>
            <li><a href="#" class="block py-1">Nosotros</a></li>
            <li><a href="#" class="block py-1">Contacto</a></li>
        </ul>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Nuestra Galería</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($fotos as $foto)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                    <img src="{{ $foto['img'] }}" alt="{{ $foto['titulo'] }}" class="w-full h-44 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-lg">{{ $foto['titulo'] }}</h2>
                        <p class="text-sm text-gray-600 mt-1">{{ $foto['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <script>
        document.getElementById('menu-btn').addEventListener('click', () => {
            document.getElementById('menu-movil').classList.toggle('hidden');
        });
    </script>
</body>
</html>