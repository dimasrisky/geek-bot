<nav class="px-[5rem] py-[0.6rem] items-center flex justify-between bg-blue-950 text-white w-screen">
    <h1 class="font-bold text-xl">GeekBot</h1>
    <div class="flex items-center gap-4">
        @guest
            <a href="{{ route('login-form') }}" class="px-7 py-2 bg-blue-800 rounded-sm text-xs">Login</a>
            <a href="{{ route('register-form') }}" class="px-7 py-2 bg-blue-800 rounded-sm text-xs">Register</a>
        @endguest
        @auth
            {{-- <h1>{{ auth }}</h1>  --}}
            <h1 class="font-semibold">{{ auth()->user()->nama }}</h1>
            <a href="" class="px-7 py-2 bg-blue-800 rounded-sm text-xs">History</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="px-7 py-2 bg-blue-800 rounded-sm text-xs">Logout</button>
            </form>
        @endauth
    </div>
</nav>