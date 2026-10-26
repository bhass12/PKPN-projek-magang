<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pusat Kajian Pariwisata Nusantara">

    <title>
        @yield('title', 'PKPN')
    </title>
    @vite('resources/css/app.css','resources/js/beranda.js')
    @stack('styles')

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Epilogue:ital,wght@0,500;0,600;0,700;0,800;1,400&family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
</head>

<script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
</script>

<body>
    <x-navbar/>

    <main>
        @yield('content')
    </main>


    <x-footer/>

</body>
</html>