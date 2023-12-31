<nav class="fixed top-0 z-10 block w-full max-w-full px-4 py-2 text-white bg-white border rounded-none shadow-md border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ url('assets/logo/logo.png') }}" alt="logo" class="bg-auto">
                </a>
            </div>

            {{-- Login & Register --}}
            <div class="flex items-center gap-4">
                @auth
                    {{-- Display user info or logout button --}}
                @else
                    {{-- Show login and register buttons --}}
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">
                            <button class="px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block" type="button">
                                Log In
                            </button>
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <button class="select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block" type="button">
                                Sign in
                            </button>
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
