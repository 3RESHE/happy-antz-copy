@include('users.employer.css')
@include('users.employer.sidebar')

<!-- Mobile Sidebar Toggle -->
<button id="sidebarToggle" class="md:hidden fixed top-4 left-4 z-50 bg-accent text-white p-2 rounded-md shadow-lg">
    <i class="fas fa-bars"></i>
</button>

<!-- Main Content -->
<main class="lg:ml-64 flex-1 flex flex-col min-h-screen overflow-hidden w-full">

    @include('users.employer.header')

    <!-- Jobs Content -->
    <div class="flex-1 flex flex-col overflow-hidden w-full">
        <div class="flex-1 overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-end mb-6">
                    <button onclick="toggleModal()" class="bg-accent hover:bg-accent/80 text-gray-800 px-4 py-2 rounded-lg flex items-center font-medium shadow-sm transition">
                        <i class="fas fa-plus mr-2"></i> Create New Post
                    </button>
                </div>
                
                <div class="bg-white rounded-md border border-gray-200 overflow-hidden shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Job Title</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Work Type</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Location</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created Date</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">HR Intern (Paid Internship, Work from Home)</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Internship</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Remote</td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <span class="h-2 w-2 rounded-full bg-green-500 mr-1 mt-1"></span> Active
                                        </span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">09/23/2024</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                        <button onclick="toggleDropdown('dropdown1')" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div id="dropdown1" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                            <div class="py-1">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Disable post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete post</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 flex flex-col sm:flex-row items-center justify-between border-t border-gray-200">
                        <div class="flex-1 flex justify-center">
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left h-5 w-5"></i>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right h-5 w-5"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('users.employer.jobs.modals')

</main>

<script>
function toggleModal() {
    const modal = document.getElementById('createJobModal');
    modal.classList.toggle('opacity-0');
    modal.classList.toggle('invisible');
    modal.children[0].classList.toggle('scale-95');
    modal.children[0].classList.toggle('scale-100');
}

document.getElementById('sidebarToggle').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar'); 
    sidebar.classList.toggle('-translate-x-full');
});
</script>
