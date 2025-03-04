<!-- Sidebar Toggle Button (Appears Only When Sidebar is Hidden on Mobile) -->
<button id="sidebar-toggle" 
    class="fixed top-1/2 left-0 z-50 bg-primary text-white p-2 rounded-r-md shadow-lg transition-all hover:bg-primary/80 hidden">
    <i class="fas fa-chevron-right text-xl"></i>
</button>

<!-- Sidebar -->
<div id="sidebar" 
    class="fixed md:relative w-64 bg-primary h-full flex flex-col shadow-2xl transition-transform transform 
    -translate-x-full md:translate-x-0 z-40 ease-in-out duration-300">

    <!-- Sidebar Header -->
    <div class="p-6 border-b border-primary-700 flex justify-between items-center">
        <h1 class="text-xl font-semibold text-white">Recruiter Dashboard</h1>
        
        <!-- Close Button (Mobile Only) -->
        <button id="close-btn" class="md:hidden text-white">
            <i class="fas fa-times text-2xl"></i>
        </button>
    </div>

<!-- Sidebar Links -->
<div class="flex-1 overflow-y-auto p-4">
    <nav class="space-y-2">
        <a href="{{ url('/employer/dashboard') }}" 
           class="flex items-center space-x-3 rounded-md p-3 transition-all duration-200
           {{ Request::is('employer/dashboard') ? 'bg-white text-primary shadow-md font-bold' : 'hover:bg-white/20 text-white' }}">
            <i class="fas fa-home text-lg"></i>
            <span class="font-medium">Dashboard</span>
        </a>
        <a href="{{ url('/employer/jobs') }}" 
           class="flex items-center space-x-3 rounded-md p-3 transition-all duration-200 
           {{ Request::is('employer/jobs') ? 'bg-white text-primary shadow-md font-bold' : 'hover:bg-white/20 text-white' }}">
            <i class="fas fa-briefcase text-lg"></i>
            <span class="font-medium">Jobs</span>
        </a>
        <a href="{{ url('/employer/candidates') }}" 
           class="flex items-center space-x-3 rounded-md p-3 transition-all duration-200 
           {{ Request::is('employer/candidates') ? 'bg-white text-primary shadow-md font-bold' : 'hover:bg-white/20 text-white' }}">
            <i class="fas fa-users text-lg"></i>
            <span class="font-medium">Candidates</span>
        </a>
    </nav>
</div>

</div>

<!-- JavaScript for Sidebar Toggle -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const closeBtn = document.getElementById('close-btn');
    const sidebar = document.getElementById('sidebar');

    function updateToggleButtonVisibility() {
        const isMobile = window.innerWidth < 768; // Tailwind md: breakpoint (768px)
        
        if (!isMobile) {
            sidebarToggle.classList.add('hidden'); // Hide button on desktop
        } else {
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebarToggle.classList.remove('hidden'); // Show when sidebar is hidden
            } else {
                sidebarToggle.classList.add('hidden'); // Hide when sidebar is visible
            }
        }
    }

    // Show sidebar & hide toggle button
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        updateToggleButtonVisibility();
    });

    // Hide sidebar & show toggle button
    closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        sidebar.classList.remove('translate-x-0');
        updateToggleButtonVisibility();
    });

    // Close sidebar when clicking outside & show button
    document.addEventListener('click', (event) => {
        const isMobile = window.innerWidth < 768;
        if (isMobile && !sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            updateToggleButtonVisibility();
        }
    });

    // Ensure toggle button visibility is set on page load & on resize
    updateToggleButtonVisibility();
    window.addEventListener('resize', updateToggleButtonVisibility);
});
</script>
