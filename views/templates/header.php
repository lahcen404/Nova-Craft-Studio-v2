<header class="bg-white shadow-md">
  <nav class="container mx-auto flex justify-between items-center py-4 px-6">
    <h1 class="text-2xl font-bold text-blue-600">
      <a href="/">DigitalWave</a>
    </h1>

    <ul class="flex space-x-6 items-center">
      <li><a href="/" class="<?= ($page === 'home') ? 'text-blue-600 font-medium' : 'text-gray-600' ?>">Home</a></li>
      <li><a href="/services" class="<?= ($page === 'services') ? 'text-blue-600 font-medium' : 'text-gray-600' ?>">Services</a></li>
      <li><a href="/about" class="<?= ($page === 'about') ? 'text-blue-600 font-medium' : 'text-gray-600' ?>">About</a></li>
      <li><a href="/contact" class="<?= ($page === 'contact') ? 'text-blue-600 font-medium' : 'text-gray-600' ?>">Contact</a></li>
    </ul>

    <div class="flex items-center space-x-4">
      <?php if (isset($_SESSION['user_id'])): ?>
        
        <a href="/profile" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded text-sm font-medium transition">
           Profile
        </a>
        
        <a href="/logout" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm font-medium transition">
          Logout
        </a>

      <?php else: ?>
        
        <a href="/login" class="text-gray-600 hover:text-blue-600 font-medium transition">
          Login
        </a>
        <a href="/register" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded text-sm font-medium transition">
          Register
        </a>

      <?php endif; ?>
    </div>
  </nav>
</header>