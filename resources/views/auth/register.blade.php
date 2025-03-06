<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Register - HappeAntz</title>
  <link rel="icon" type="image/x-icon" href="./images/HAPPEANTZ.PNG">
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
           <img src="{{ asset('images/HAPPEANTZ.PNG') }}" alt="Logo" class="h-8 w-8 rounded-full">

            <span class="text-xl font-bold tracking-tight">
              <span class="text-primary">HAPPY</span>
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
                <p class="text-sm text-gray-500 text-center mt-2">Create your HappeAntz account to get started</p>
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
                        I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
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


    <!-- Footer -->
    <footer class="w-full py-4 bg-dark-blue-start text-white">
      <div class="container mx-auto px-4 text-center">
        <p class="text-sm">© <script>document.write(new Date().getFullYear())</script> HappeAntz. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html>
