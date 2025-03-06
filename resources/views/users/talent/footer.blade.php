<body class="flex flex-col min-h-screen">
  <main class="flex-1"> 
    <!-- Page content here -->
  </main>

  <!-- Footer -->
  <footer class="w-full py-6 bg-dark-blue-start text-white">
    <div class="container mx-auto px-4 md:px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-lg font-bold mb-4">About Us</h3>
          <ul class="space-y-2">
            <li><a href="#" class="hover:underline">Our Story</a></li>
            <li><a href="#" class="hover:underline">Team</a></li>
            <li><a href="#" class="hover:underline">Careers</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">For Employers</h3>
          <ul class="space-y-2">
            <li><a href="#" class="hover:underline">Post a Job</a></li>
            <li><a href="#" class="hover:underline">Pricing</a></li>
            <li><a href="#" class="hover:underline">Resources</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">For Talent</h3>
          <ul class="space-y-2">
            <li><a href="#" class="hover:underline">Find Jobs</a></li>
            <li><a href="#" class="hover:underline">Career Advice</a></li>
            <li><a href="#" class="hover:underline">Profile Tips</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Contact</h3>
          <ul class="space-y-2">
            <li><a href="#" class="hover:underline">Support</a></li>
            <li><a href="#" class="hover:underline">FAQ</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="flex flex-col md:flex-row justify-between items-center mt-8 pt-8 border-t border-dark-blue-end/50">
        <div class="flex items-center gap-2 mb-4 md:mb-0">
          <img src="{{ asset('images/HAPPYANTZ.PNG') }}" alt="Logo" class="h-8 w-8 rounded-full">
          <span class="text-xl font-bold">
            <span class="text-white">HAPPEE</span>
            <span class="text-secondary">ANTZ</span>
          </span>
        </div>
        <p class="text-sm">© <script>document.write(new Date().getFullYear())</script> AntWorks. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>
