<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Writer Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900">
  <!-- Writer Navigation Bar -->
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="../dashboard.php" class="text-xl font-bold text-red-600">NewsWriter</a>
        </div>

        <!-- Nav Links -->
        <div class="hidden md:flex space-x-6 items-center">
          <a href="writer_dashboard.php" class="text-gray-700 hover:text-red-600 font-medium">Dashboard</a>
          <a href="my_articles.php" class="text-gray-700 hover:text-red-600 font-medium">My Articles</a>
          <a href="create_article.php" class="text-gray-700 hover:text-red-600 font-medium">New Article</a>
          <a href="../auth/logout.php" class="text-gray-700 hover:text-red-600 font-medium">Logout</a>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button id="mobileMenuBtn" class="text-gray-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

  </nav>

 