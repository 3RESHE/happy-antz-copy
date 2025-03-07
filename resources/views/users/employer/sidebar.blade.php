<aside id="sidebar" class="w-64 bg-white border-r border-gray-200 flex flex-col h-screen fixed top-0 z-40 md:z-50 md:translate-x-0 -translate-x-full transition-transform duration-300">
    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
        <span class="text-2xl font-extrabold tracking-wide text-primary">
            HAPPEE <span class="text-secondary">ANTZ</span>
        </span>
        <button id="sidebar-close" class="md:hidden text-gray-600">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto p-4">
        <div class="space-y-2">
            <a href="{{ url('/employer/dashboard') }}" 
               class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 {{ request()->is('employer/dashboard') ? 'bg-gray-200 text-gray-800' : 'text-gray-700' }}">
                <i class="fas fa-home w-5"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ url('/employer/jobs') }}" 
               class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 {{ request()->is('employer/jobs') ? 'bg-gray-200 text-gray-800' : 'text-gray-700' }}">
                <i class="fas fa-briefcase w-5"></i>
                <span>Jobs</span>
            </a>

            <a href="{{ url('/employer/candidates') }}" 
               class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 {{ request()->is('employer/candidates') ? 'bg-gray-200 text-gray-800' : 'text-gray-700' }}">
                <i class="fas fa-users w-5"></i>
                <span>Candidates</span>
            </a>
        </div>
    </nav>
</aside>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const closeButton = document.getElementById("sidebar-close");
        closeButton.addEventListener("click", function () {
            document.getElementById("sidebar").classList.add("-translate-x-full");
        });
    });
</script>