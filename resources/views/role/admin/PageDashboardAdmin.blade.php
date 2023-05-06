<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/sonic2.png')}}">

    <title>Sonic</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body class="bg-[#F6FAFF]">

    <div class="flex flex-nowrap">
        <div class="w-max">
            <livewire:sidebar.sidebar-admin/>
        </div>
        <div class="w-full overflow-hidden">
            <div class="p-5">
                <livewire:header.header-admin/>
            </div>
            <div class="p-5 space-y-5">
                <livewire:table.daftar-produk/>
                <livewire:modal.tambah-produk/>
                <livewire:modal.import-produk/>
                <livewire:modal.edit-produk/>
                <livewire:modal.hapus-produk/>
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('assets/flowbite/dist/flowbite.js') }}"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/js/responsiveSidebar.js')}}"></script>
    <script src="{{ asset('assets/js/activeSidebarAdmin.js')}}"></script>
    <script src="{{ asset('assets/js/previewImage.js')}}"></script>

    {{-- js preview name import produk --}}
    <script>
        $('#file-upload').change(function () {
            var i = $(this).prev('label').clone();
            var file = $('#file-upload')[0].files[0].name;
            $(this).prev('label').text(file);
        });
    </script>
</body>


</html>
