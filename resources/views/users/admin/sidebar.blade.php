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
            HAPPEE <span class="text-accent">ANTZ</span>
        </span>
        <button id="sidebarClose" class="md:hidden p-2 text-white hover:text-accent transition-colors">
            <i class="fas fa-times text-lg"></i>
        </button>
    </div>
    <nav class="flex-1 overflow-y-auto p-4">
        <div class="space-y-2">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-200 {{ request()->is('/') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-700 hover:text-primary' }}">
                <i class="fas fa-chart-line w-5"></i>
                <span>Dashboard</span>
            </a>
            <div>
                <button id="userManagementToggle" class="w-full flex items-center justify-between p-3 rounded-lg transition-all duration-200 hover:bg-gray-100 text-gray-700 hover:text-primary">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-users w-5"></i>
                        <span>User Management</span>
                    </div>
                    <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                </button>
                <div id="userManagementSubmenu" class="pl-12 space-y-2 mt-2 hidden">
                    <a href="{{ route('admin.admins') }}" class="block p-2 rounded-lg transition-all duration-200 {{ request()->is('admin/user-admins') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-600 hover:text-primary' }}">
                        Admins
                    </a>
                    <a href="{{ route('admin.employers') }}" class="block p-2 rounded-lg transition-all duration-200 {{ request()->is('admin/user-employers') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-600 hover:text-primary' }}">
                        Employers
                    </a>
                    <a href="{{ route('admin.talents') }}" class="block p-2 rounded-lg transition-all duration-200 {{ request()->is('admin/user-talents') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-600 hover:text-primary' }}">
                        Talents
                    </a>
                </div>
            </div>
            <a href="{{ route('admin.logs') }}" class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-200 {{ request()->is('admin/logs') ? 'bg-primary text-white font-bold' : 'hover:bg-gray-100 text-gray-700 hover:text-primary' }}">
                <i class="fas fa-history w-5"></i>
                <span>Admin Logs</span>
            </a>
        </div>
    </nav>
</aside>

<!-- Overlay (Mobile) -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden transition-opacity duration-300"></div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebarClose = document.getElementById("sidebarClose");
        const overlay = document.getElementById("overlay");
        const userManagementToggle = document.getElementById("userManagementToggle");
        const userManagementSubmenu = document.getElementById("userManagementSubmenu");

        function toggleSidebar() {
            sidebar.classList.toggle("-translate-x-full");
            overlay.classList.toggle("hidden");
            if (!sidebar.classList.contains("-translate-x-full")) {
                sidebarToggle.classList.add("hidden");
            } else {
                sidebarToggle.classList.remove("hidden");
            }
        }

        if (userManagementToggle) {
            userManagementToggle.addEventListener("click", function () {
                userManagementSubmenu.classList.toggle("hidden");
                const chevron = userManagementToggle.querySelector(".fa-chevron-down");
                chevron.classList.toggle("rotate-180");
            });
            if ({{ request()->is('admin/user-admins') || request()->is('admin/user-employers') || request()->is('admin/user-talents') ? 'true' : 'false' }}) {
                userManagementSubmenu.classList.remove("hidden");
                userManagementToggle.querySelector(".fa-chevron-down").classList.add("rotate-180");
            }
        }

        if (sidebarToggle) sidebarToggle.addEventListener("click", toggleSidebar);
        if (sidebarClose) sidebarClose.addEventListener("click", toggleSidebar);
        if (overlay) overlay.addEventListener("click", toggleSidebar);
    });
</script>