<!-- Sidebar -->
<aside id="sidebar" class="w-64 bg-white border-r border-gray-200 flex flex-col h-screen fixed z-[50] md:translate-x-0 -translate-x-full transition-transform duration-300">
    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
        <span class="text-2xl font-extrabold tracking-wide text-primary">
            HAPPEE <span class="text-secondary">ANTZ</span>
        </span>
        <button onclick="toggleSidebar()" class="md:hidden text-gray-600">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto p-4">
        <div class="space-y-2">
            <!-- Dashboard -->
            <a href="{{ url('/') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 
                {{ request()->is('/') ? 'bg-gray-200 text-gray-800' : 'text-gray-700' }}">
                <i class="fas fa-chart-line w-5"></i>
                <span>Dashboard</span>
            </a>

            <!-- User Management -->
            <div>
                <button onclick="toggleSubmenu()" class="w-full flex items-center justify-between p-3 rounded-lg hover:bg-gray-100 text-gray-700">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-users w-5"></i>
                        <span>User Management</span>
                    </div>
                    <i class="fas fa-chevron-down text-sm"></i>
                </button>
                
                <div id="userManagementSubmenu" class="pl-12 space-y-2 mt-2 
                    {{ request()->is('admin/user-admins') || request()->is('admin/user-employers') || request()->is('admin/user-talents') ? '' : 'hidden' }}">
                    
                    <a href="{{ route('admin.admins') }}" class="block p-2 rounded-lg hover:bg-gray-100 
                        {{ request()->is('admin/user-admins') ? 'bg-gray-200 text-gray-800' : 'text-gray-600' }}">
                        Admins
                    </a>
                    
                    <a href="{{ route('admin.employers') }}" class="block p-2 rounded-lg hover:bg-gray-100 
                        {{ request()->is('admin/user-employers') ? 'bg-gray-200 text-gray-800' : 'text-gray-600' }}">
                        Employers
                    </a>
                    
                    <a href="{{ route('admin.talents') }}" class="block p-2 rounded-lg hover:bg-gray-100 
                        {{ request()->is('admin/user-talents') ? 'bg-gray-200 text-gray-800' : 'text-gray-600' }}">
                        Talents
                    </a>
                </div>
            </div>

            <!-- Admin Logs -->
            <a href="{{ route('admin.logs') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 
                {{ request()->is('admin/logs') ? 'bg-gray-200 text-gray-800' : 'text-gray-700' }}">
                <i class="fas fa-history w-5"></i>
                <span>Admin Logs</span>
            </a>
        </div>
    </nav>
</aside>

<!-- Sidebar Toggle Button (Small Arrow) -->
<button id="sidebar-toggle" onclick="toggleSidebar()" class="fixed left-2 top-1/2 transform -translate-y-1/2 bg-gray-200 p-2 rounded-r-lg shadow-md transition-all duration-300 md:hidden">
    <i id="sidebar-icon" class="fas fa-angle-right text-lg transition-transform duration-300"></i>
</button>


<!-- JavaScript -->
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.getElementById("sidebar-toggle");

        if (sidebar.classList.contains("-translate-x-full")) {
            sidebar.classList.remove("-translate-x-full");
            toggleButton.innerHTML = "&lt;"; // Change arrow to "<" when sidebar is open
            toggleButton.classList.add("left-64"); // Move button with sidebar
        } else {
            sidebar.classList.add("-translate-x-full");
            toggleButton.innerHTML = "&gt;"; // Change arrow to ">" when sidebar is closed
            toggleButton.classList.remove("left-64"); // Move button back
        }
    }
</script>
