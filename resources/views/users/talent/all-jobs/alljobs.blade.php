@include('users.talent.css')
@include('users.talent.header')

<section id="all-jobs" class="w-full py-12 md:py-24 bg-white">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-primary">ALL JOBS</h2>
        </div>

        <!-- Search and Filter Section -->
        <div class="mt-8 mb-6">
            <form id="jobFilterForm" method="GET" action="{{ route('talent.all_jobs') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Live Search -->
                <div>
                    <input type="text" name="search" id="search" 
                           class="w-full px-4 py-2 border rounded-lg" 
                           placeholder="Search jobs..." 
                           value="{{ request('search') }}">
                </div>

                <!-- Filters -->
                <div>
                    <select name="location" class="w-full px-4 py-2 border rounded-lg">
                        <option value="">All Locations</option>
                        <option value="remote" {{ request('location') == 'remote' ? 'selected' : '' }}>Remote</option>
                        <option value="on-site" {{ request('location') == 'on-site' ? 'selected' : '' }}>On-site</option>
                        <option value="hybrid" {{ request('location') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                    </select>
                </div>

                <div>
                    <select name="type" class="w-full px-4 py-2 border rounded-lg">
                        <option value="">All Types</option>
                        <option value="full-time" {{ request('type') == 'full-time' ? 'selected' : '' }}>Full-time</option>
                        <option value="part-time" {{ request('type') == 'part-time' ? 'selected' : '' }}>Part-time</option>
                        <option value="contract" {{ request('type') == 'contract' ? 'selected' : '' }}>Contract</option>
                        <option value="internship" {{ request('type') == 'internship' ? 'selected' : '' }}>Internship</option>
                    </select>
                </div>

                <div>
                    <input type="text" name="salary" 
                           class="w-full px-4 py-2 border rounded-lg" 
                           placeholder="Salary range" 
                           value="{{ request('salary') }}">
                </div>
            </form>
        </div>

        <!-- Jobs Listing -->
        <div id="jobsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($jobs as $job)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 pb-4">
                        <div class="flex items-center gap-4">
                            <img src="{{ $job->company_logo ?? 'https://placehold.co/50x50' }}" alt="Company logo" class="w-12 h-12 rounded-md">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $job->title }}</h3>
                                <p class="text-sm text-gray-500">{{ $job->company_name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-2">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium">Location:</span>
                                <span class="text-sm text-gray-500">{{ $job->location }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium">Salary:</span>
                                <span class="text-sm text-gray-500">{{ $job->salary_range ?? 'N/A' }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium">Type:</span>
                                <span class="text-sm text-gray-500">{{ $job->type }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-4 border-t">
                        <a href="{{ route('jobs.show', $job->id) }}" class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90 text-center block">
                            View Details
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center col-span-full text-gray-500">No jobs found.</p>
            @endforelse
        </div>

        <!-- Redesigned Pagination -->
        @if ($jobs->hasPages())
            <div class="mt-6 flex justify-center">
                <nav class="flex items-center space-x-2" aria-label="Pagination">
                    <!-- Previous Button -->
                    @if ($jobs->onFirstPage())
                        <span class="px-3 py-2 bg-white border border-gray-300 text-gray-400 rounded-md cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </span>
                    @else
                        <a href="{{ $jobs->previousPageUrl() }}" class="px-3 py-2 bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 rounded-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    @endif

                    <!-- Page Numbers -->
                    @foreach ($jobs->links()->elements[0] as $page => $url)
                        @if ($page == $jobs->currentPage())
                            <span class="px-3 py-2 bg-primary text-white border border-primary rounded-md font-medium">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-2 bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 rounded-md">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    <!-- Next Button -->
                    @if ($jobs->hasMorePages())
                        <a href="{{ $jobs->nextPageUrl() }}" class="px-3 py-2 bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 rounded-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    @else
                        <span class="px-3 py-2 bg-white border border-gray-300 text-gray-400 rounded-md cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    @endif
                </nav>
            </div>
        @endif
    </div>
</section>

@include('users.talent.footer')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('jobFilterForm');
    const searchInput = document.getElementById('search');
    let debounceTimer;

    // Debounced search
    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            form.submit();
        }, 500);
    });

    // Immediate filter changes
    form.querySelectorAll('select').forEach(select => {
        select.addEventListener('change', () => form.submit());
    });
});
</script>

@include('users.talent.js')