<!-- Sidebar Toggle Button (Small Arrow) -->
<button id="sidebarToggle" class="md:hidden p-2 fixed top-1/2 left-0 transform -translate-y-1/2 bg-gray-200 rounded-r-md z-50">
    <i id="sidebarIcon" class="fas fa-angle-right text-lg transition-transform duration-300"></i>
</button>



<!-- Sidebar -->
<aside id="sidebar" class="w-64 bg-white border-r border-gray-200 flex flex-col h-screen fixed left-0 top-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-40">
    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
        <span class="text-2xl font-extrabold tracking-wide text-primary">
            HAPPY <span class="text-secondary">ANTZ</span>
        </span>
        <!-- Close Button (Mobile) -->
        <button id="sidebarClose" class="md:hidden p-2">
            <i class="fas fa-times"></i>
        </button>
    </div>

<!-- Sidebar Links -->
<nav class="flex-1 overflow-y-auto p-4">
    <div class="space-y-2">
        <!-- Dashboard -->
        <a href="{{ url('/employer/dashboard') }}" 
           class="flex items-center space-x-3 p-3 rounded-lg {{ Request::is('employer/dashboard') ? 'bg-gray-100 text-gray-700 font-bold' : 'hover:bg-gray-100 text-gray-700' }}">
            <i class="fas fa-home w-5"></i>
            <span>Dashboard</span>
        </a>

        <!-- Jobs -->
        <a href="{{ url('/employer/jobs') }}" 
           class="flex items-center space-x-3 p-3 rounded-lg {{ Request::is('employer/jobs') ? 'bg-gray-100 text-gray-700 font-bold' : 'hover:bg-gray-100 text-gray-700' }}">
            <i class="fas fa-briefcase w-5"></i>
            <span>Jobs</span>
        </a>

        <!-- Candidates -->
        <a href="{{ url('/employer/candidates') }}" 
           class="flex items-center space-x-3 p-3 rounded-lg {{ Request::is('employer/candidates') ? 'bg-gray-100 text-gray-700 font-bold' : 'hover:bg-gray-100 text-gray-700' }}">
            <i class="fas fa-users w-5"></i>
            <span>Candidates</span>
        </a>
    </div>
</nav>

</aside>

<!-- Overlay (Mobile) -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden"></div>

<!-- JavaScript for Sidebar & Submenu Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebarIcon = document.getElementById("sidebarIcon");
    
        function toggleSidebar() {
            sidebar.classList.toggle("-translate-x-full");
            if (sidebar.classList.contains("-translate-x-full")) {
                sidebarIcon.classList.remove("rotate-180");
            } else {
                sidebarIcon.classList.add("rotate-180");
            }
        }
    
        sidebarToggle.addEventListener("click", toggleSidebar);
    });
    </script>
    

