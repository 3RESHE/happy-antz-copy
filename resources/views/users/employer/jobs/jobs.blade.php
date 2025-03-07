@include('users.employer.css')
<style>
    .dropdown-menu {
        position: fixed; /* Changed to fixed for viewport-based positioning */
        z-index: 20; /* Higher z-index to stay above other content */
        min-width: 12rem; /* Consistent width */
        max-height: 50vh; /* Limit height to avoid overflow */
        overflow-y: auto; /* Scroll if content exceeds max-height */
    }
</style>
@include('users.employer.sidebar')

<main class="lg:ml-64 flex-1 flex flex-col min-h-screen overflow-hidden w-full">
    @include('users.employer.header')

    <div class="flex-1 flex flex-col overflow-hidden w-full">
        <div class="flex-1 overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between mb-6">
                    <!-- Search Input -->
                    <div class="w-1/3">
                        <input type="text" id="searchInput" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-accent" placeholder="Search jobs...">
                    </div>
                    <!-- Sort Dropdown -->
                    <div class="flex items-center space-x-4">
                        <select id="sortBy" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-accent">
                            <option value="created_at">Created At</option>
                            <option value="deadline">Deadline</option>
                            <option value="title">Job Title</option>
                        </select>
                        <select id="sortDirection" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-accent">
                            <option value="desc">Descending</option>
                            <option value="asc">Ascending</option>
                        </select>
                        <button onclick="toggleModal()" class="bg-accent hover:bg-accent/80 text-gray-800 px-4 py-2 rounded-lg flex items-center font-medium shadow-sm transition">
                            <i class="fas fa-plus mr-2"></i> Create New Post
                        </button>
                    </div>
                </div>

                <!-- Jobs Table -->
                <div id="jobsTable">
                    @if ($jobs->count() > 0)
                        <div class="bg-white rounded-md border border-gray-200 overflow-hidden shadow-sm">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Job Title</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Work Type</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Location</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deadline</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jobsTableBody" class="bg-white divide-y divide-gray-200">
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $job->title }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500 max-w-xs truncate" title="{{ $job->description }}">{{ $job->description }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500">{{ ucfirst($job->type) }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500">{{ ucfirst($job->location) }}</td>
                                                <td class="px-4 py-4 whitespace-nowrap">
                                                    @php $isActive = $job->deadline > now(); @endphp
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $isActive ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                        <span class="h-2 w-2 rounded-full {{ $isActive ? 'bg-green-500' : 'bg-red-500' }} mr-1 mt-1"></span>
                                                        {{ $isActive ? 'Active' : 'Expired' }}
                                                    </span>
                                                </td>
                                                <td class="px-4 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($job->deadline)->format('m/d/Y') }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500">{{ $job->created_at->format('m/d/Y') }}</td>
                                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                                    <button onclick="toggleDropdown(event, 'dropdown{{ $job->id }}')" class="text-gray-500 hover:text-gray-700">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <div id="dropdown{{ $job->id }}" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                        <div class="py-1">
                                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Disable post</a>
                                                            <a href="#" onclick="toggleEditModal({{ $job->id }}, '{{ $job->title }}', '{{ $job->description }}', '{{ $job->type }}', '{{ $job->location }}', '{{ $job->salary_range }}', '{{ \Carbon\Carbon::parse($job->deadline)->format('Y-m-d') }}')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit post</a>
                                                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete post</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="pagination" class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                                <div class="flex-1 flex justify-center">
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                        @if ($jobs->onFirstPage())
                                            <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 cursor-not-allowed">
                                                <span class="sr-only">Previous</span>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </span>
                                        @else
                                            <a href="{{ $jobs->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                <span class="sr-only">Previous</span>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </a>
                                        @endif

                                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-200 text-sm font-medium text-gray-700">
                                            {{ $jobs->currentPage() }}
                                        </span>

                                        @if ($jobs->hasMorePages())
                                            <a href="{{ $jobs->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                <span class="sr-only">Next</span>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        @else
                                            <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 cursor-not-allowed">
                                                <span class="sr-only">Next</span>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </span>
                                        @endif
                                    </nav>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-10">
                            <p class="text-gray-500 text-lg">No active job posts available.</p>
                        </div>
                    @endif
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

function toggleDropdown(event, id) {
    event.stopPropagation();
    
    // Hide all other dropdowns
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu.id !== id) menu.classList.add('hidden');
    });

    const dropdown = document.getElementById(id);
    const button = event.currentTarget;
    const rect = button.getBoundingClientRect();
    const dropdownHeight = dropdown.offsetHeight;
    const viewportHeight = window.innerHeight;

    // Toggle visibility
    dropdown.classList.toggle('hidden');

    if (!dropdown.classList.contains('hidden')) {
        // Reset any previous inline styles
        dropdown.style.top = '';
        dropdown.style.bottom = '';
        
        // Position dropdown to the right of the button
        dropdown.style.left = `${rect.right - dropdown.offsetWidth}px`;

        // Check if dropdown would overflow bottom of viewport
        const spaceBelow = viewportHeight - rect.bottom;
        if (spaceBelow < dropdownHeight && rect.top > dropdownHeight) {
            // Flip dropdown above the button if there's more space above
            dropdown.style.bottom = `${viewportHeight - rect.top}px`;
        } else {
            // Position below the button
            dropdown.style.top = `${rect.bottom}px`;
        }
    }
}

document.addEventListener('click', function (event) {
    if (!event.target.closest('.dropdown-menu')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
    }
});

document.getElementById('sidebarToggle').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar'); 
    sidebar.classList.toggle('-translate-x-full');
});

// Live Search and Sort
function fetchJobs(page = 1) {
    const search = document.getElementById('searchInput').value;
    const sortBy = document.getElementById('sortBy').value;
    const sortDirection = document.getElementById('sortDirection').value;

    fetch('{{ route("employer.jobs") }}?' + new URLSearchParams({
        search: search,
        sort_by: sortBy,
        sort_direction: sortDirection,
        page: page,
    }), {
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        const tbody = document.getElementById('jobsTableBody');
        const pagination = document.getElementById('pagination');

        // Clear current table rows
        tbody.innerHTML = '';

        if (data.jobs.length > 0) {
            data.jobs.forEach(job => {
                const isActive = new Date(job.deadline) > new Date();
                const row = `
                    <tr>
                        <td class="px-4 py-4 text-sm font-medium text-gray-900">${job.title}</td>
                        <td class="px-4 py-4 text-sm text-gray-500 max-w-xs truncate" title="${job.description}">${job.description}</td>
                        <td class="px-4 py-4 text-sm text-gray-500">${job.type.charAt(0).toUpperCase() + job.type.slice(1)}</td>
                        <td class="px-4 py-4 text-sm text-gray-500">${job.location.charAt(0).toUpperCase() + job.location.slice(1)}</td>
                        <td class="px-4 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${isActive ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}">
                                <span class="h-2 w-2 rounded-full ${isActive ? 'bg-green-500' : 'bg-red-500'} mr-1 mt-1"></span>
                                ${isActive ? 'Active' : 'Expired'}
                            </span>
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-500">${new Date(job.deadline).toLocaleDateString('en-US')}</td>
                        <td class="px-4 py-4 text-sm text-gray-500">${new Date(job.created_at).toLocaleDateString('en-US')}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                            <button onclick="toggleDropdown(event, 'dropdown${job.id}')" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div id="dropdown${job.id}" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Disable post</a>
                                    <a href="#" onclick="toggleEditModal(${job.id}, '${job.title}', '${job.description}', '${job.type}', '${job.location}', '${job.salary_range}', '${new Date(job.deadline).toISOString().split('T')[0]}')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit post</a>
                                    <form action="{{ route('jobs.destroy', '') }}/${job.id}" method="POST" class="block">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete post</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>`;
                tbody.innerHTML += row;
            });

            // Render pagination with original design
            const pag = data.pagination;
            pagination.innerHTML = `
                <div class="flex-1 flex justify-center">
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        ${pag.on_first_page ? `
                            <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 cursor-not-allowed">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </span>
                        ` : `
                            <a href="#" onclick="fetchJobs(${pag.current_page - 1}); return false;" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </a>
                        `}
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-200 text-sm font-medium text-gray-700">
                            ${pag.current_page}
                        </span>
                        ${pag.has_more_pages ? `
                            <a href="#" onclick="fetchJobs(${pag.current_page + 1}); return false;" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        ` : `
                            <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 cursor-not-allowed">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        `}
                    </nav>
                </div>
            `;
        } else {
            tbody.innerHTML = '<tr><td colspan="8" class="px-4 py-4 text-sm text-gray-500 text-center">No jobs found.</td></tr>';
            pagination.innerHTML = '';
        }
    })
    .catch(error => console.error('Error fetching jobs:', error));
}

// Debounce function to limit search requests
function debounce(func, wait) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}

// Event Listeners
document.getElementById('searchInput').addEventListener('input', debounce(fetchJobs, 300));
document.getElementById('sortBy').addEventListener('change', fetchJobs);
document.getElementById('sortDirection').addEventListener('change', fetchJobs);

// Initial fetch
fetchJobs();
</script>