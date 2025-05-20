<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsFlash - Stay Informed Instantly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-newspaper text-blue-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-gray-900">NewsFlash</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#features" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Features</a>
                        <a href="#how-it-works" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">How It Works</a>
                        <a href="#testimonials" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Testimonials</a>
                    </div>
                </div>
                <div class="md:ml-6">
                   <a href="./auth/register.php">
                   <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                       Register
                    </button>
                   </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Stay informed with</span>
                        <span class="block text-blue-600">real-time news</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Get personalized news updates from trusted sources around the world, delivered straight to your device.
                    </p>
                    <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <button class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-8 transition duration-300">
                                <i class="fab fa-apple mr-2"></i> App Store
                            </button>
                            <button class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-8 transition duration-300">
                                <i class="fab fa-google-play mr-2"></i> Google Play
                            </button>
                        </div>
                        <p class="mt-3 text-xs text-gray-500">
                            Available on iOS and Android devices
                        </p>
                    </div>
                </div>
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <div class="relative block w-full bg-white rounded-lg overflow-hidden">
                            <img class="w-full" src="https://images.unsplash.com/photo-1585829365295-ab7cd400d7e9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="NewsFlash app screenshot">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Articles Section -->
<section class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center mb-10">
      <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Latest Articles</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Stay Updated
      </p>
    </div>

    <ul class="space-y-8">
      <?php
      // connect to DB
      include '/var/www/html/daySepPhp/db/conn.php'; 

      try {
          $stmt = $conn->query("SELECT * FROM articles ORDER BY id DESC");
          $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if (count($articles) === 0) {
              echo "<li class='text-gray-600 text-center'>No articles found.</li>";
          } else {
              foreach ($articles as $article) {
                  echo "<li class='border-b pb-4'>";
                  echo "<h3 class='text-xl font-semibold text-gray-800'>" . htmlspecialchars($article['title']) . "</h3>";
                  echo "<p class='text-gray-700 mt-1'>" . nl2br(htmlspecialchars($article['description'])) . "</p>";
                  echo "</li>";
              }
          }
      } catch(PDOException $e) {
          echo "<li class='text-red-600'>Error fetching articles: " . $e->getMessage() . "</li>";
      }
      ?>
    </ul>
  </div>
</section>


  

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What our users say
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J.">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Sarah J.</h4>
                            <p class="text-gray-500">Journalist</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600 italic">
                            "NewsFlash has completely changed how I stay informed. The personalized feed saves me hours each week by showing me exactly what I care about."
                        </p>
                        <div class="mt-3 flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael T.">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Michael T.</h4>
                            <p class="text-gray-500">Business Owner</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600 italic">
                            "The real-time alerts are incredibly accurate and fast. I've gotten breaking news notifications before my colleagues who use other apps."
                        </p>
                        <div class="mt-3 flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya K.">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Priya K.</h4>
                            <p class="text-gray-500">Student</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600 italic">
                            "As an international student, I love being able to get news from both my home country and my current location all in one place."
                        </p>
                        <div class="mt-3 flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Product</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Features</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Pricing</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">About</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Privacy</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Terms</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Connect</h3>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 text-center">
                    &copy; 2023 NewsFlash. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>