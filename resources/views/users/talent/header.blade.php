<!-- Header -->
<header class="sticky top-0 z-50 w-full border-b bg-secondary text-black">
    <div class="container mx-auto flex h-16 items-center justify-between px-4">
        <div class="flex items-center gap-2">
            <!-- Mobile Menu Toggle Button -->
            <button id="mobileMenuToggle" class="p-2 rounded-md hover:bg-gray-100 md:hidden">
                <i class="fas fa-bars"></i>
            </button>

            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <img src="{{ asset('images/HAPPYANTZ.PNG') }}" alt="Logo" class="h-8 w-8 rounded-full">
                <span class="text-xl font-bold tracking-tight">
                    <span class="text-primary">HAPPEE</span>
                    <span class="text-accent">ANTZ</span>
                </span>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-4">
            <a href="#jobs" class="px-3 py-1.5 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200 shadow-sm">Ant-Mazing Jobs</a>
            <a href="#talents" class="px-3 py-1.5 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200 shadow-sm">Ant-Credible Talents</a>
            <a href="#pricing" class="px-3 py-1.5 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200 shadow-sm">Hive-Wise Pricing</a>
            <a href="#join" class="px-3 py-1.5 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200 shadow-sm">Join the Colony</a>
            <a href="#how" class="px-3 py-1.5 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200 shadow-sm">How It Works</a>
        </nav>

        <!-- Auth Section -->
        <div class="flex items-center gap-4">
            @auth
                <!-- User Dropdown -->
                <div class="relative group">
                    <button class="flex items-center px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 focus:outline-none">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="hidden md:flex items-center gap-4">
                    <a href="{{ route('login') }}">
                        <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">Register</button>
                    </a>
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobileMenu" class="hidden md:hidden bg-secondary border-t px-4 py-4">
        <nav class="flex flex-col gap-3">
            <a href="#jobs" class="px-3 py-2 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200">Ant-Mazing Jobs</a>
            <a href="#talents" class="px-3 py-2 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200">Ant-Credible Talents</a>
            <a href="#pricing" class="px-3 py-2 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200">Hive-Wise Pricing</a>
            <a href="#join" class="px-3 py-2 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200">Join the Colony</a>
            <a href="#how" class="px-3 py-2 text-sm font-semibold uppercase tracking-wide text-black bg-white/80 rounded-full hover:bg-primary hover:text-white transition-all duration-200">How It Works</a>
            
            @guest
                <div class="flex flex-col gap-2 mt-2">
                    <a href="{{ route('login') }}">
                        <button class="w-full px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="w-full px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">Register</button>
                    </a>
                </div>
            @endguest
        </nav>
    </div>
</header>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuToggle = document.getElementById("mobileMenuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    mobileMenuToggle.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });

    // Close mobile menu when clicking outside
    document.addEventListener("click", function (event) {
        if (!mobileMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
            mobileMenu.classList.add("hidden");
        }
    });
});
</script>

<!-- Required for Font Awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">