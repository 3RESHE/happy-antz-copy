<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Login - HappyAntz</title>
  <link rel="icon" type="image/x-icon" href="../HAPPYANTZ.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: "#3A73C9",
              foreground: "#FFFFFF",
            },
            secondary: {
              DEFAULT: "#FDCB58",
              foreground: "#000000",
            },
            accent: {
              DEFAULT: "#E78B00",
              foreground: "#FFFFFF",
            },
            "light-bg": "#F4F6F9",
            "dark-blue-start": "#003366",
            "dark-blue-end": "#005f99",
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
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
          <a href="{{url('/')}}" class="flex items-center gap-2">
            <img src="./images/HAPPYANTZ.png" alt="Logo" class="h-8 w-8 rounded-full">
            <span class="text-xl font-bold tracking-tight">
              <span class="text-dark-blue-start">HAPPY</span>
              <span class="text-accent">ANTZ</span>
            </span>
          </a>
        </div>
        <div>
          <a href="{{ route('register') }}" class="text-sm font-medium hover:text-primary">
            Need an account? Register
          </a>
        </div>
      </div>
    </header>

    <!-- Login Form Section -->
    <section class="flex-grow flex items-center justify-center py-12 px-4">
      <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-6 border-b">
            <h2 class="text-2xl font-bold text-center text-primary">Welcome Back!</h2>
            <p class="text-sm text-gray-500 text-center mt-2">Sign in to access your HappyAntz account</p>
          </div>
          
          <div class="p-6">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
              @csrf
              
              <!-- Email Address -->
              <div class="space-y-2">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              
              <!-- Password -->
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <x-input-label for="password" :value="__('Password')" />
                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs text-primary hover:underline">
                      Forgot password?
                    </a>
                  @endif
                </div>
                <x-text-input id="password" class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              
              <!-- Remember Me -->
              <div class="flex items-center">
                <input id="remember_me" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" name="remember">
                <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                  {{ __('Remember me') }}
                </label>
              </div>
              
              <!-- Sign in Button -->
              <button type="submit" class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                {{ __('Log in') }}
              </button>

              <!-- Sign in with Google -->
              <div class="relative my-4">
                <div class="absolute inset-0 flex items-center">
                  <div class="w-full border-t"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                  <span class="px-2 bg-white text-gray-500">OR</span>
                </div>
              </div>
                {{-- {{ route('google.login') }} --}}
              <a href="" class="w-full flex items-center justify-center gap-2 px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                      <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z"/>
                      <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z"/>
                      <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z"/>
                      <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z"/>
                    </g>
                  </svg>

                <span>Sign in with Google</span>
              </a>
            </form>
            
            <div class="mt-6 text-center">
              <p class="text-sm text-gray-600">
                Don't have an account? 
                <a href="{{ route('register') }}" class="font-medium text-primary hover:underline">
                  Register now
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
        <p class="text-sm">© <script>document.write(new Date().getFullYear())</script> HappyAntz. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html>
