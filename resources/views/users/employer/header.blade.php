<!-- HEADER -->
<header id="header" class="bg-accent shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center gap-2">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
               <img src="{{ asset('images/HAPPYANTZ.png') }}" alt="Logo" class="h-8 w-8 rounded-full">
                <span class="text-xl font-bold tracking-tight">
                    <span class="text-primary">HAPPY</span>
                    <span class="text-secondary">ANTZ</span>
                </span>
            </a>
        </div>

        <div class="flex items-center gap-4">
            @auth
                <!-- Profile Dropdown -->
                <div class="relative">
                    <button id="profile-btn"
                        class="flex items-center px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 focus:outline-none">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu (Hidden by Default) -->
                    <div id="profile-dropdown" 
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hidden">
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Login & Register Buttons -->
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
        </div>
    </div>
</header>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const profileBtn = document.getElementById("profile-btn");
        const dropdown = document.getElementById("profile-dropdown");

        profileBtn.addEventListener("click", function (event) {
            event.stopPropagation();
            dropdown.classList.toggle("hidden");
        });

        document.addEventListener("click", function (event) {
            if (!dropdown.contains(event.target) && !profileBtn.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    });
</script>
