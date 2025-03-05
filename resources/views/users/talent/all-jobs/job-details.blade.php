@include('users.talent.css')
@include('users.talent.header')

<section class="w-full py-12 md:py-24 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
      <div class="p-6">
        <h2 class="text-3xl font-bold text-primary">{{ $job->title }}</h2>
        <p class="text-lg text-gray-600 mt-2">{{ $job->company_name }}</p>

        <div class="mt-4 space-y-2 text-gray-700">
          <div><strong>Location:</strong> {{ $job->location }}</div>
          <div><strong>Salary:</strong> {{ $job->salary_range ?? 'N/A' }}</div>
          <div><strong>Job Type:</strong> {{ $job->type }}</div>
          <div><strong>Posted:</strong> {{ $job->created_at->format('F d, Y') }}</div>
        </div>

        <div class="mt-6">
          <h3 class="text-xl font-semibold">Job Description</h3>
          <p class="mt-2 text-gray-700">{{ $job->description }}</p>
        </div>

        <div class="mt-6">
          <button id="applyButton" class="block w-full text-center bg-primary text-white py-3 px-6 rounded-md hover:bg-primary/90">
            Apply Now
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="applyModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
      <h2 class="text-2xl font-bold text-primary">Apply for {{ $job->title }}</h2>
      <form action="{{ route('job_applications.store', $job->id) }}" method="POST" enctype="multipart/form-data" class="mt-4 space-y-4">
          @csrf
          <input type="hidden" name="job_post_id" value="{{ $job->id }}">

          <div>
            <label class="block text-sm font-medium text-gray-700">CV (PDF/DOC/DOCX)</label>
            <input type="file" name="cv_path" required accept=".pdf,.doc,.docx" class="w-full px-4 py-2 border rounded-md focus:ring-primary focus:border-primary">
            @error('cv_path') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Resume (PDF/DOC/DOCX)</label>
            <input type="file" name="resume_path" required accept=".pdf,.doc,.docx" class="w-full px-4 py-2 border rounded-md focus:ring-primary focus:border-primary">
            @error('resume_path') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="flex justify-end space-x-2">
            <button type="button" id="closeModal" class="px-4 py-2 border rounded-md text-gray-700 hover:bg-gray-100">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary/90">Submit</button>
          </div>
        </form>      
    </div>
</div>

<script>
  document.getElementById('applyButton').addEventListener('click', function() {
    document.getElementById('applyModal').classList.remove('hidden');
  });

  document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('applyModal').classList.add('hidden');
  });

  // Close modal if clicking outside of it
  document.getElementById('applyModal').addEventListener('click', function(event) {
    if (event.target === this) {
      this.classList.add('hidden');
    }
  });
</script>

@include('users.talent.footer')
@include('users.talent.js')
