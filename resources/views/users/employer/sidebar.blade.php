<!-- Sidebar Toggle Button (Hamburger Menu) -->
<button id="sidebarToggle" class="md:hidden p-2 fixed top-4 left-4 bg-primary text-white rounded-md z-50 transition-all duration-300 hover:bg-primary/90">
    <span id="sidebarIcon" class="flex flex-col w-6 h-5 justify-between items-center">
        <span class="w-full h-0.5 bg-white rounded transition-all duration-300"></span>
        <span class="w-full h-0.5 bg-white rounded transition-all duration-300"></span>
        <span class="w-full h-0.5 bg-white rounded transition-all duration-300"></span>
    </span>
</button>

<!-- Sidebar -->
<aside id="sidebar" class="w-64 bg-white border-r border-gray-200 flex flex-col h-screen fixed left-0 top-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-40 shadow-lg">
    <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-gradient-to-r from-primary to-secondary">
        <span class="text-2xl font-extrabold tracking-wide text-white">
            HAPPY <span class="text-accent">ANTZ</span>
        </span>
        <!-- Close Button (Mobile) -->
        <button id="sidebarClose" class="md:hidden p-2 text-white hover:text-accent transition-colors">
            <i class="fas fa-times text-lg"></i>
        </button>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex-1 overflow-y-auto p-4">
        <div class="space-y-2">
            <!-- Dashboard -->
            <a href="{{ url('/employer/dashboard') }}" 
               class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-200 {{ Request::is('employer/dashboard') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-700 hover:text-primary' }}">
                <i class="fas fa-home w-5"></i>
                <span>Dashboard</span>
            </a>

            <!-- Jobs -->
            <a href="{{ url('/employer/jobs') }}" 
               class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-200 {{ Request::is('employer/jobs') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-700 hover:text-primary' }}">
                <i class="fas fa-briefcase w-5"></i>
                <span>Jobs</span>
            </a>

            <!-- Candidates -->
            <a href="{{ url('/employer/candidates') }}" 
               class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-200 {{ Request::is('employer/candidates') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-700 hover:text-primary' }}">
                <i class="fas fa-users w-5"></i>
                <span>Candidates</span>
            </a>
        </div>
    </nav>
</aside>

<!-- Overlay (Mobile) -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden transition-opacity duration-300"></div>

<!-- JavaScript for Sidebar Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebarIcon = document.getElementById("sidebarIcon");
        const sidebarClose = document.getElementById("sidebarClose");
        const overlay = document.getElementById("overlay");

        function toggleSidebar() {
            sidebar.classList.toggle("-translate-x-full");
            overlay.classList.toggle("hidden");

            // Show/hide the hamburger button based on sidebar state
            if (!sidebar.classList.contains("-translate-x-full")) {
                // Sidebar is open, hide the hamburger button
                sidebarToggle.classList.add("hidden");
            } else {
                // Sidebar is closed, show the hamburger button
                sidebarToggle.classList.remove("hidden");
            }
        }

        // Event listeners
        if (sidebarToggle) sidebarToggle.addEventListener("click", toggleSidebar);
        if (sidebarClose) sidebarClose.addEventListener("click", toggleSidebar);
        if (overlay) overlay.addEventListener("click", toggleSidebar);
    });
</script>