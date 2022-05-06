<div>
    <nav 
        class="py-6 fixed left-0 right-0 z-50 px-2" 
        style="transition: 0.5s"
    >
        <div class="container mx-auto flex items-center justify-between">
            <img src="{{ asset('img/logo.png') }}" alt="alope logo" width="150px" id="logo">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a 
                            href="{{ url('/dashboard') }}" 
                            class="text-sm text-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a 
                            href="{{ route('login') }}" 
                            class="text-white text-sm font-semibold login-link"
                        >
                            <i class="fa-solid fa-lock"></i>
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a 
                                href="{{ route('register') }}" 
                                class="ml-6 text-white text-sm font-semibold register-link"
                            >
                                <i class="fas fa-user"></i>
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    <script>
        window.addEventListener('scroll', function(){
            const NAVBAR= document.querySelector("nav"); 
            const LOGO= document.querySelector("#logo"); 
            const LOGLINK= document.querySelector("a.login-link"); 
            const REGLINK= document.querySelector("a.register-link"); 
            if(window.scrollY > 20){ // jika sudah di scroll

                // jadikan background navigasi jadi putih 
                NAVBAR.classList.add('bg-white');

                // hapus class tailwind yang membuat navigasi menjadi transparan
                NAVBAR.classList.remove('bg-transparent');

                // ganti gambar ke logo hitam
                LOGO.setAttribute("src", "{{ asset('img/black_logo.png') }}");

                // ganti warna link jadi abu abu
                LOGLINK.classList.add('text-gray-700');
                REGLINK.classList.add('text-gray-700');

                // hapus class tailwind yang merubah text jadi putih
                LOGLINK.classList.remove('text-white');
                REGLINK.classList.remove('text-white');

                // setel padding
                NAVBAR.classList.add('md:px-10');
                NAVBAR.classList.add('py-3');
                NAVBAR.classList.remove('py-6');

                // setel padding for mobile
                NAVBAR.classList.add('px-5');

            } else{ // keadaan navigasi ketika window tidak di scroll

                // hapus class tailwind yang membuat navigasi menjadi warna putih
                NAVBAR.classList.remove('bg-white');

                // tambah class tailwind yang membuat navigasi jadi transparan
                NAVBAR.classList.add('bg-transparent');

                //ubah gambar logo menjadi default logo (putih)
                LOGO.setAttribute("src", "{{ asset('img/logo.png') }}");

                // ubah warna link menjadi putih
                LOGLINK.classList.add('text-white');
                REGLINK.classList.add('text-white');

                // hapus class tailwind yang membuat warna link jadi abu abu
                LOGLINK.classList.remove('text-gray-700');
                REGLINK.classList.remove('text-gray-700');

                // unset padding setting
                NAVBAR.classList.remove('md:px-10');
                NAVBAR.classList.remove('py-3');
                NAVBAR.classList.add('py-6');
                
                // unset padding setting for mobile
                NAVBAR.classList.remove('px-5');
            }
        });
    </script>
</div>