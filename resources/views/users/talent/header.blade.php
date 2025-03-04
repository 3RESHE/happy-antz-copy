<!-- Include Alpine.js (Required for Dropdown) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>

<!-- Header -->
<header class="sticky top-0 z-50 w-full border-b bg-secondary text-black">
    <div class="container mx-auto flex h-16 items-center justify-between px-4">
        <div class="flex items-center gap-2">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
               <img src="{{ asset('images/HAPPYANTZ.png') }}" alt="Logo" class="h-8 w-8 rounded-full">

                <span class="text-xl font-bold tracking-tight">
                    <span class="text-primary">HAPPY</span>
                    <span class="text-accent">ANTZ</span>
                </span>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-6">
            <a href="#jobs" class="text-sm font-medium hover:text-primary">ANT-MAZING JOBS!</a>
            <a href="#talents" class="text-sm font-medium hover:text-primary">ANT-CREDIBLE TALENTS</a>
            <a href="#pricing" class="text-sm font-medium hover:text-primary">HIVE-WISE PRICING</a>
            <a href="#join" class="text-sm font-medium hover:text-primary">JOIN THE COLONY!</a>
            <a href="#how" class="text-sm font-medium hover:text-primary">HOW IT WORKS</a>
        </nav>

        <div class="flex items-center gap-4">
            @auth
                <!-- Custom Dropdown (Styled) -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex items-center px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 focus:outline-none">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-all">
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm  hover:bg-primary text-gray-700 hover:text-white transition">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Register & Login Buttons -->
                <a href="{{ route('login') }}">
                    <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">
                        Login
                    </button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">
                        Register
                    </button>
                </a>
            @endauth

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-md hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="container mx-auto hidden md:hidden py-4 border-t px-4">
        <nav class="flex flex-col gap-4">
            <a href="#jobs" class="text-sm font-medium hover:text-primary">ANT-MAZING JOBS!</a>
            <a href="#talents" class="text-sm font-medium hover:text-primary">ANT-CREDIBLE TALENTS</a>
            <a href="#pricing" class="text-sm font-medium hover:text-primary">HIVE-WISE PRICING</a>
            <a href="#join" class="text-sm font-medium hover:text-primary">JOIN THE COLONY!</a>
            <a href="#how" class="text-sm font-medium hover:text-primary">HOW IT WORKS</a>

            @guest
                <div class="flex gap-2 mt-2">
                    <a href="{{ route('login') }}">
                        <button class="flex-1 px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">
                            Login
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="flex-1 px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">
                            Register
                        </button>
                    </a>
                </div>
            @endguest
        </nav>
    </div>
</header>
