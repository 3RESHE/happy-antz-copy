@include('users.talent.css')

@include('users.talent.header')

<section id="all-jobs" class="w-full py-12 md:py-24 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center">
      <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-primary">ALL JOBS</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
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

    @if (isset($jobs) && $jobs)
    <!-- Pagination -->
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div class="flex-1 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">

                {{-- Previous Page Link --}}
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

                {{-- Current Page --}}
                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-200 text-sm font-medium text-gray-700">
                    {{ $jobs->currentPage() }}
                </span>

                {{-- Next Page Link --}}
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
@endif





  </div>
</section>



@include('users.talent.footer')


@include('users.talent.js')