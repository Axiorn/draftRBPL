<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar - e-Nalasha</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

<div class="min-h-screen flex">
  <!-- Left side (Form Sign-up) -->
  <div class="w-1/2 flex flex-col justify-center px-20">
    <a href="{{ route('login') }}" class="mb-6 text-gray-700 hover:underline text-sm flex items-center">
      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
      Back to Login
    </a>

    <h1 class="text-3xl font-bold mb-6">Daftar Sekarang !</h1>

    <form method="POST" action="{{ route('signup') }}" class="space-y-5">
      @csrf
      <div>
        <label class="block mb-1 text-sm font-medium">Name</label>
        <input type="text" name="name" required placeholder="Enter your name" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
      </div>
      <div>
        <label class="block mb-1 text-sm font-medium">Email address</label>
        <input type="email" name="email" required placeholder="Enter your email" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
      </div>
      <div>
        <label class="block mb-1 text-sm font-medium">Password</label>
        <input type="password" name="password" required placeholder="Password" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
      </div>
      <button type="submit" class="bg-green-800 text-white w-full py-2 rounded hover:bg-green-700">Signup</button>
    </form>
  </div>

  <!-- Right side (Banner + Produk Preview) -->
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
