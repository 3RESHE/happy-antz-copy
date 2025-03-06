@include('users.employer.css')
@include('users.employer.sidebar')


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

                @if ($jobs->count() > 0)
                    <div class="bg-white rounded-md border border-gray-200 overflow-hidden shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Job Title</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Work Type</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Location</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Application Deadline</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created Date</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $job->title }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($job->type) }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($job->location) }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                @php
                                                    $isActive = $job->deadline > now();
                                                @endphp
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $isActive ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    <span class="h-2 w-2 rounded-full {{ $isActive ? 'bg-green-500' : 'bg-red-500' }} mr-1 mt-1"></span>
                                                    {{ $isActive ? 'Active' : 'Expired' }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ \Carbon\Carbon::parse($job->deadline)->format('m/d/Y') }}
                                            </td>
                                            
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $job->created_at->format('m/d/Y') }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                                <button onclick="toggleDropdown(event, 'dropdown{{ $job->id }}')" class="text-gray-500 hover:text-gray-700">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div id="dropdown{{ $job->id }}" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                    <div class="py-1">
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Disable post</a>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit post</a>
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

                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                        <div class="flex-1 flex justify-center">
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                
                                {{-- Previous Page Link --}}
                                @if ($jobs->onFirstPage())
                                    <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 cursor-not-allowed">
                                        <span class="sr-only">Previous</span>
                                        <!-- Inline SVG for Chevron Left -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </span>
                                @else
                                    <a href="{{ $jobs->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <!-- Inline SVG for Chevron Left -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </a>
                                @endif

                                {{-- Current Page --}}
                                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-200 text-sm font-medium text-gray-700">
                                    {{ $jobs->currentPage() }}
                                </span>

                                {{-- Next Page Link --}}
                                @if ($jobs->hasMorePages())
                                    <a href="{{ $jobs->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <!-- Inline SVG for Chevron Right -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                @else
                                    <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 cursor-not-allowed">
                                        <span class="sr-only">Next</span>
                                        <!-- Inline SVG for Chevron Right -->
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
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu.id !== id) menu.classList.add('hidden');
    });
    document.getElementById(id).classList.toggle('hidden');
}

// Close dropdowns when clicking outside
document.addEventListener('click', function (event) {
    if (!event.target.closest('.dropdown-menu')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
    }
});

document.getElementById('sidebarToggle').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar'); 
    sidebar.classList.toggle('-translate-x-full');
});
</script>
