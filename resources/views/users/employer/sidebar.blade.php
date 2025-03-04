<!-- Sidebar Container -->
<div class="flex">

    <!-- Burger Menu Button (Mobile) -->
    <button id="menu-btn" class="md:hidden fixed top-4 left-4 z-50 bg-primary text-white p-2 rounded-md shadow-lg">
        <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Sidebar -->
    <div id="sidebar" 
        class="fixed md:relative w-64 bg-primary h-full flex flex-col shadow-lg transition-transform transform -translate-x-full md:translate-x-0 z-40">

        <!-- Sidebar Header -->
        <div class="p-6 border-b border-primary-700 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-white">Recruiter Dashboard</h1>
            
            <!-- Close Button (Mobile Only) -->
            <button id="close-btn" class="md:hidden text-white">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Sidebar Links -->
        <div class="flex-1 overflow-y-auto p-4">
            <nav class="space-y-2">
                <a href="{{ url('/employer/dashboard') }}" 
                   class="rounded-md p-3 flex items-center space-x-3 cursor-pointer transition 
                   {{ Request::is('dashboard') ? 'bg-white text-primary' : 'hover:bg-white/50 text-white' }}">
                    <i class="fas fa-home {{ Request::is('dashboard') ? 'text-primary' : 'text-white' }}"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="{{ url('/employer/jobs') }}" 
                   class="rounded-md p-3 flex items-center space-x-3 cursor-pointer transition 
                   {{ Request::is('jobs') ? 'bg-white text-primary' : 'hover:bg-white/50 text-white' }}">
                    <i class="fas fa-briefcase {{ Request::is('jobs') ? 'text-primary' : 'text-white' }}"></i>
                    <span class="font-medium">Jobs</span>
                </a>
                <a href="{{ url('/employer/candidates') }}" 
                   class="rounded-md p-3 flex items-center space-x-3 cursor-pointer transition 
                   {{ Request::is('candidates') ? 'bg-white text-primary' : 'hover:bg-white/50 text-white' }}">
                    <i class="fas fa-users {{ Request::is('candidates') ? 'text-primary' : 'text-white' }}"></i>
                    <span class="font-medium">Candidates</span>
                </a>
            </nav>
        </div>
    </div>

</div>

<!-- JavaScript for Sidebar Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
        });

        // Close sidebar when clicking outside
        document.addEventListener('click', (event) => {
            if (!sidebar.contains(event.target) && !menuBtn.contains(event.target)) {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
            }
        });

        // Close sidebar when clicking a link
        document.querySelectorAll('#sidebar a').forEach(link => {
            link.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
            });
        });
    });
</script>
