<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ✅ Add Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" href="/favicon.png">
    <title>COSC 4806</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body class="bg-gray-100 text-gray-900">

<!-- ✅ Tailwind Navbar -->
<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <a href="#" class="text-xl font-bold text-blue-600 flex items-center">COSC 4806</a>
        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
          <a href="/home" class="inline-flex items-center px-1 pt-1 border-b-2 border-blue-500 text-sm font-medium text-blue-700">Home</a>
          <a href="/about" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">About Me</a>
          <div class="relative group">
            <button class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700">
              Dropdown
              <svg class="ml-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.292l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
            <div class="absolute z-10 hidden group-hover:block bg-white shadow-lg mt-2 rounded-md w-48">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Action</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Another action</a>
              <div class="border-t border-gray-200"></div>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Something else here</a>
            </div>
          </div>
          <span class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-400 cursor-not-allowed">Disabled</span>
        </div>
      </div>
    </div>
  </div>
</nav>
