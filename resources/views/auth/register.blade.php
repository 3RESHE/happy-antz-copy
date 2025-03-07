<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Register - HappeeAntz</title>
  <link rel="icon" type="image/x-icon" href="./images/HAPPYANTZ.PNG">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: { DEFAULT: "#3A73C9", foreground: "#FFFFFF" },
            secondary: { DEFAULT: "#FDCB58", foreground: "#000000" },
            accent: { DEFAULT: "#E78B00", foreground: "#FFFFFF" },
            "light-bg": "#F4F6F9",
            "dark-blue-start": "#003366",
            "dark-blue-end": "#005f99",
          },
          fontFamily: { sans: ['Inter', 'sans-serif'] },
          backgroundImage: { "hero-gradient": "linear-gradient(to right, #003366, #005f99)" },
        }
      }
    }
  </script>
</head>
<body class="bg-light-bg text-foreground font-sans">
  <div class="flex min-h-screen flex-col">

    <!-- Header -->
    <header class="w-full border-b bg-secondary text-black">
      <div class="container mx-auto flex h-16 items-center justify-between px-4">
        <div class="flex items-center gap-2">
          <a href="{{ url('/') }}" class="flex items-center gap-2">
           <img src="{{ asset('images/HAPPYANTZ.PNG') }}" alt="Logo" class="h-8 w-8 rounded-full">
            <span class="text-xl font-bold tracking-tight">
              <span class="text-primary">HAPPEE</span>
              <span class="text-accent">ANTZ</span>
            </span>
          </a>
        </div>
        <div>
          <a href="{{ route('login') }}" class="text-sm font-medium hover:text-primary">
            Already have an account? Login
          </a>
        </div>
      </div>
    </header>

    <!-- Register Form Section -->
    <section class="flex-grow flex items-center justify-center py-12 px-4">
      <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-6 border-b">
            <h2 class="text-2xl font-bold text-center text-primary">Join the Colony!</h2>
            <p class="text-sm text-gray-500 text-center mt-2">Create your HappeeAntz account to get started</p>
          </div>

          <div class="p-6">
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
              @csrf

              <div class="space-y-2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-primary"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Enter your full name"
                />
                <x-input-error :messages="$errors->get('name')" class="text-red-500 text-sm" />
              </div>

              <div class="space-y-2">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-primary"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autocomplete="username"
                    placeholder="Enter your email address"
                />
                <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm" />
              </div>

              <div class="space-y-2">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input
                    id="password"
                    class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-primary"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Enter a strong password"
                />
                <p class="text-xs text-gray-500">Password must be at least 8 characters long with a number and special character</p>
                <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm" />
              </div>

              <div class="space-y-2">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input
                    id="password_confirmation"
                    class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-primary"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Re-enter your password"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 text-sm" />
              </div>

              <div class="space-y-2">
                <label class="text-sm font-medium">
                    I am registering as
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center p-3 border border-gray-300 rounded-md cursor-pointer hover:border-primary">
                        <input
                            id="talent"
                            name="role"
                            type="radio"
                            value="talent"
                            checked
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300"
                        >
                        <label for="talent" class="ml-2 block text-sm font-medium text-gray-700 cursor-pointer">
                            Talent/Job Seeker
                        </label>
                    </div>
                    <div class="flex items-center p-3 border border-gray-300 rounded-md cursor-pointer hover:border-primary">
                        <input
                            id="employer"
                            name="role"
                            type="radio"
                            value="employer"
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300"
                        >
                        <label for="employer" class="ml-2 block text-sm font-medium text-gray-700 cursor-pointer">
                            Employer
                        </label>
                    </div>
                </div>
              </div>

              <div class="flex items-center">
                <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                <label for="terms" class="ml-2 block text-sm text-gray-700">
                    I agree to the 
                    <a href="#" class="text-primary hover:underline" onclick="document.getElementById('termsModal').classList.remove('hidden'); return false;">Terms of Service</a> 
                    and 
                    <a href="#" class="text-primary hover:underline" onclick="document.getElementById('privacyModal').classList.remove('hidden'); return false;">Privacy Policy</a>
                </label>
              </div>

              <button type="submit" class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90 focus:ring-2 focus:ring-primary">
                Create Account
              </button>
            </form>

            <div class="mt-6 text-center">
              <p class="text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="font-medium text-primary hover:underline">
                    Sign in
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
      <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full m-4">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary mb-4">Terms of Service</h3>
          <div class="text-gray-700 max-h-[60vh] overflow-y-auto">
            <p><strong>Last Updated: March 07, 2025</strong></p>
            <p>Welcome to HappeeAntz! By accessing or using our website (the "Service"), you agree to be bound by these Terms of Service ("Terms"). If you do not agree, please do not use our Service.</p>
            
            <h4 class="font-semibold mt-4">1. Use of the Service</h4>
            <p>- HappeeAntz is a platform connecting job seekers ("Talent") and employers. Talent may create profiles and apply to jobs, while employers may post job listings.<br>
            - You must be at least 18 years old to use the Service.<br>
            - You agree to provide accurate, current, and complete information and to use the Service in compliance with Philippine laws and regulations.</p>

            <h4 class="font-semibold mt-4">2. User Accounts</h4>
            <p>- You are responsible for maintaining the confidentiality of your account credentials.<br>
            - Notify us immediately of any unauthorized use of your account at support@happeeantz.com.<br>
            - We may suspend or terminate accounts that violate these Terms or applicable laws.</p>

            <h4 class="font-semibold mt-4">3. Content</h4>
            <p>- <strong>Talent</strong>: You grant HappeeAntz a non-exclusive, worldwide license to use, display, and share your profile and application materials with employers for job-matching purposes.<br>
            - <strong>Employers</strong>: You warrant that job postings are accurate, lawful, and comply with labor laws (e.g., Republic Act No. 10911 - Anti-Age Discrimination in Employment Act).<br>
            - We may remove content that violates these Terms, Philippine laws, or third-party rights.</p>

            <h4 class="font-semibold mt-4">4. Prohibited Activities</h4>
            <p>- Posting false, misleading, or discriminatory job listings.<br>
            - Using the Service to spam, harass, or engage in illegal activities under Philippine law (e.g., cybercrime under Republic Act No. 10175).<br>
            - Attempting to disrupt or hack the Service.</p>

            <h4 class="font-semibold mt-4">5. Limitation of Liability</h4>
            <p>- HappeeAntz does not guarantee job placement or the accuracy of listings.<br>
            - To the fullest extent permitted by Philippine law, we are not liable for damages arising from your use of the Service.</p>

            <h4 class="font-semibold mt-4">6. Changes to Terms</h4>
            <p>- We may update these Terms at any time. Continued use after changes constitutes acceptance. We will notify you of significant updates via email or the Service.</p>

            <h4 class="font-semibold mt-4">7. Governing Law</h4>
            <p>- These Terms are governed by the laws of the Republic of the Philippines. Disputes shall be resolved in the courts of Manila, Philippines.</p>

            <p class="mt-4">Contact us at support@happeeantz.com with any questions.</p>
          </div>
          <div class="mt-6 flex justify-end">
            <button 
              onclick="document.getElementById('termsModal').classList.add('hidden')"
              class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary/90"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
      <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full m-4">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary mb-4">Privacy Policy</h3>
          <div class="text-gray-700 max-h-[60vh] overflow-y-auto">
            <p><strong>Last Updated: March 07, 2025</strong></p>
            <p>HappeeAntz respects your privacy. This Privacy Policy outlines how we collect, use, and protect your personal information in compliance with the <strong>Data Privacy Act of 2012 (Republic Act No. 10173)</strong> and other applicable laws.</p>

            <h4 class="font-semibold mt-4">1. Information We Collect</h4>
            <p>- <strong>Personal Data</strong>: Name, email address, password, and role (Talent or Employer) when you register.<br>
            - <strong>Talent</strong>: Profile details (e.g., resume, skills, employment history) you provide.<br>
            - <strong>Employers</strong>: Company details and job posting information.<br>
            - <strong>Automatically Collected</strong>: IP address, browser type, and usage data via cookies or similar technologies.</p>

            <h4 class="font-semibold mt-4">2. How We Use Your Information</h4>
            <p>- To create and manage your account.<br>
            - To connect Talent with Employers and facilitate job applications.<br>
            - To improve our Service, send updates, and provide support.<br>
            - To comply with legal obligations under Philippine law.</p>

            <h4 class="font-semibold mt-4">3. Lawful Basis</h4>
            <p>- We process your data with your consent (e.g., when you register or apply to jobs) or as necessary for our legitimate interests (e.g., improving the Service), subject to your rights under the Data Privacy Act.</p>

            <h4 class="font-semibold mt-4">4. Sharing Your Information</h4>
            <p>- <strong>Talent</strong>: Your profile and application data are shared with employers when you apply to jobs.<br>
            - <strong>Employers</strong>: Job postings are visible to Talent users.<br>
            - <strong>Service Providers</strong>: We use third parties (e.g., hosting, analytics) under data-sharing agreements compliant with Philippine law.<br>
            - <strong>Legal</strong>: We may disclose data if required by law or to protect our rights, with notice where feasible.</p>

            <h4 class="font-semibold mt-4">5. Data Security</h4>
            <p>- We implement reasonable security measures (e.g., encryption) to protect your data, as required by the Data Privacy Act. However, no system is 100% secure.</p>

            <h4 class="font-semibold mt-4">6. Your Rights (Under the Data Privacy Act)</h4>
            <p>- <strong>Access</strong>: Request a copy of your personal data.<br>
            - <strong>Correction</strong>: Update inaccurate data.<br>
            - <strong>Deletion</strong>: Request removal of your data, subject to legal retention requirements.<br>
            - <strong>Objection</strong>: Object to certain processing activities.<br>
            - <strong>Complaints</strong>: File a complaint with the National Privacy Commission (NPC) if your rights are violated.<br>
            - Exercise these rights by contacting us at privacy@happeeantz.com.</p>

            <h4 class="font-semibold mt-4">7. Cookies</h4>
            <p>- We use cookies to enhance your experience. You may disable them via browser settings, but this may affect functionality.</p>

            <h4 class="font-semibold mt-4">8. Data Retention</h4>
            <p>- We retain your data only as long as necessary for the purposes outlined or as required by law (e.g., tax or labor regulations).</p>

            <h4 class="font-semibold mt-4">9. Changes to This Policy</h4>
            <p>- We may update this policy. Check the "Last Updated" date. Significant changes will be notified via email or the Service.</p>

            <p class="mt-4">Contact our Data Protection Officer at privacy@happeeantz.com for questions or concerns.</p>
          </div>
          <div class="mt-6 flex justify-end">
            <button 
              onclick="document.getElementById('privacyModal').classList.add('hidden')"
              class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary/90"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w-full py-4 bg-dark-blue-start text-white">
      <div class="container mx-auto px-4 text-center">
        <p class="text-sm">© <script>document.write(new Date().getFullYear())</script> HappeeAntz. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html>