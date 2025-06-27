<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-Nalasha - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-white">
  <div class="min-h-screen flex">
    <!-- Left: Form Login -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-8">
      <div class="max-w-md w-full space-y-6">
        <div>
          <h2 class="text-3xl font-semibold text-gray-900">Haloo!</h2>
          <p class="text-gray-600">Masukkan Email dan Password yang telah terdaftar</p>
        </div>

        <form class="space-y-5">
          <div>
            <label class="text-sm font-medium">Email address</label>
            <input type="email" placeholder="Enter your email" class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <div>
            <label class="text-sm font-medium">Password</label>
            <input type="password" placeholder="Password" class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <div class="flex items-center">
            <input type="checkbox" id="remember" class="mr-2">
            <label for="remember" class="text-sm">Remember for 30 days</label>
          </div>
          <button type="submit" class="w-full bg-green-700 text-white py-2 rounded-lg hover:bg-green-800 transition"><a href="{{ route('landing') }}">Login</button></a>

          </form>

        <div class="flex items-center gap-2">
          <hr class="flex-1 border-gray-300">
          <span class="text-gray-400 text-sm">or</span>
          <hr class="flex-1 border-gray-300">
        </div>

        <button class="flex items-center justify-center w-full border py-2 rounded-lg hover:bg-gray-100 transition">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google Logo" class="w-5 h-5 mr-2">
          Sign in with Google
        </button>

        <p class="text-center text-sm text-gray-600">Don't have an account? <a href="{{ route('signup') }}" class="text-blue-600 font-medium">Sign Up</a></p>
      </div>
    </div>

    <!-- Right: Banner & Produk Preview -->
    <div class="hidden md:flex md:w-1/2 bg-gray-100 items-center justify-center p-10">
      <div class="space-y-6">
        <img src="/assets/images/landing/login.png" alt="Banner" class="rounded-lg shadow"/>
        <div class="grid grid-cols-2 gap-4">
          <div>
            <img src="/assets/images/landing/login_1.png" class="rounded-md">
          </div>
          <div>
            <img src="/assets/images/landing/login_2.png" class="rounded-md">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
