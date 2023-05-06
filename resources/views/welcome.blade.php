<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body>
    <h1 class="text-3xl font-bold underline bg-blue-500">
        Hello world!
    </h1>
    <div class="p-5 bg-blue-300">
        <livewire:table.daftar-produk/>
    </div>

    @livewireScripts
    <script src="{{ asset('assets/flowbite/dist/flowbite.js') }}"></script>
</body>


</html>
