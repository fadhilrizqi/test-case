<form autocomplete="off" action="/login" method="POST">
    @csrf
    <div class="p-5 rounded-xl bg-black bg-opacity-20 w-80">
        <div class="flex justify-center mb-10">
            <img class="w-28" src="{{ asset('assets/images/logoipsum.png') }}" alt="">
        </div>
        <div class="relative z-0 w-full mb-8 group">
            <span class="iconify absolute top-3 left-2.5 text-white" data-icon="iconamoon:profile"></span>
            <input type="text" name="email" id="email"
                class="block py-2.5 px-10 w-full text-sm text-white bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                placeholder=" " required />
            <label for="nama"
                class="px-10 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
        </div>
        <div class="relative z-0 w-full mb-8 group">
            <span class="iconify absolute top-3 left-2.5 text-white" data-icon="bx:lock-open-alt"></span>
            <input type="password" name="password" id="password"
                class="block py-2.5 px-10 w-full text-sm text-white bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                placeholder=" " required />
            <label for="password"
                class="px-10 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kata
                Sandi</label>
            <div class="text-white absolute top-3 right-2.5 cursor-pointer">
                <iconify-icon id="toggler" icon="akar-icons:eye"></iconify-icon>
            </div>
        </div>
        {{-- <a href="{{ route('dashboardAdmin') }}"> --}}
        <button type="submit" class="bg-white text-gray-900 w-full rounded-full py-1.5 font-medium">
            Masuk
        </button>
        {{-- </a> --}}
    </div>

    <br />

    <div class="alert alert-info" role="alert">
        username: admin<br />
        password: admin
    </div>
</form>
