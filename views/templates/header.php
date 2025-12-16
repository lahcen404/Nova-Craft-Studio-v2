<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($title) ?></title>
  <link rel="stylesheet" href="../public/assets/tailwind-css/src/output.css">
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <ul class="flex space-x-6">
        <li><a href="/" class="<?= (isset($page) && $page === 'home') ? 'text-blue-600 font-medium' : '' ?>" >Home</a></li>
        <li><a href="/services" class="<?= (isset($page) && $page === 'services') ? 'text-blue-600 font-medium' : '' ?>">Services</a></li>
        <li><a href="/about" class="<?= (isset($page) && $page === 'about') ? 'text-blue-600 font-medium' : '' ?>">About</a></li>
        <li><a href="/contact" class="<?= (isset($page) && $page === 'contact') ? 'text-blue-600 font-medium' : '' ?>">Contact</a></li>
      </ul>
    </nav>
  </header>