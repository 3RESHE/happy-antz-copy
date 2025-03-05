<!-- Featured Jobs Section -->
<section id="jobs" class="w-full py-12 md:py-24 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="flex flex-col items-center justify-center space-y-4 text-center">
      <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-primary">FEATURED JOBS</h2>
      <p class="text-gray-500 md:text-xl max-w-[700px]">
        Discover top opportunities from leading companies
      </p>
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
            <a href="#" class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90 text-center block">
              View Details
            </a>
          </div>
        </div>
      @empty
        <p class="text-center col-span-full text-gray-500">No active jobs found.</p>
      @endforelse
    </div>

    <!-- View All Jobs Button -->
    <div class="mt-8 flex justify-center">
      <a href="{{route('talent.all_jobs')}}" class="px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary/10">
        View All Jobs
      </a>
    </div>
  </div>
</section>
