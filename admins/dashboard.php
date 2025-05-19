<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsFlash Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-newspaper text-blue-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-gray-900">NewsFlash Admin</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#dashboard" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <a href="#articles" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Articles</a>
                        <a href="#categories" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Categories</a>
                        <a href="#users" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Users</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-700">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="../auth/logout.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Stats Cards -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-newspaper text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Total Articles</p>
                        <p class="text-2xl font-semibold text-gray-900">1,248</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-full">
                        <i class="fas fa-tags text-green-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Categories</p>
                        <p class="text-2xl font-semibold text-gray-900">24</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-users text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Active Users</p>
                        <p class="text-2xl font-semibold text-gray-900">5,678</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-eye text-yellow-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Today's Views</p>
                        <p class="text-2xl font-semibold text-gray-900">12,345</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Articles Section -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Recent Articles</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4 hover:bg-gray-50 transition duration-150">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-md font-medium text-gray-900">Global Summit Addresses Climate Change Concerns</h3>
                            <p class="text-sm text-gray-500 mt-1">Published: 2 hours ago | Category: World News</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 transition duration-150">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-md font-medium text-gray-900">Tech Giant Unveils New AI Assistant</h3>
                            <p class="text-sm text-gray-500 mt-1">Published: 5 hours ago | Category: Technology</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 transition duration-150">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-md font-medium text-gray-900">Local Team Wins Championship Title</h3>
                            <p class="text-sm text-gray-500 mt-1">Published: Yesterday | Category: Sports</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 bg-gray-50 text-right">
                <a href="#view-all" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View all articles →</a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Add New Article -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Add New Article</h3>
                <p class="text-sm text-gray-500 mb-4">Create and publish a new news article</p>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                    <i class="fas fa-plus mr-2"></i> New Article
                </button>
            </div>
            
            <!-- Manage Categories -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Manage Categories</h3>
                <p class="text-sm text-gray-500 mb-4">Add, edit or remove news categories</p>
                <button class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                    <i class="fas fa-tags mr-2"></i> Categories
                </button>
            </div>
            
            <!-- User Management -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-medium text-gray-900 mb-4">User Management</h3>
                <p class="text-sm text-gray-500 mb-4">View and manage user accounts</p>
                <button class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                    <i class="fas fa-users-cog mr-2"></i> Manage Users
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 mt-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <p class="text-base text-gray-400">
                    &copy; 2023 NewsFlash Admin Dashboard. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fas fa-question-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>