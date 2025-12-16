<?php 
$services = require_once __DIR__ . '/../data/services.php';
?>

<h2 class="text-4xl font-extrabold text-gray-900 mb-8 border-b pb-2">Nos Services DigitalWave</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <?php 
    foreach ($services as $service): 
    ?>
    
        <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-blue-500">
            
            <div class="mb-4">
                <img src="<?= htmlspecialchars($service['image']) ?>" 
                     alt="<?= htmlspecialchars($service['title']) ?>"
                     class="w-full h-32 object-cover rounded-md shadow-inner mb-2">
            </div>
            
            <h3 class="text-2xl font-semibold text-blue-600 mb-3"><?= htmlspecialchars($service['title']) ?></h3>
            
            <p class="text-gray-600 mb-4"><?= htmlspecialchars($service['description']) ?></p>
            
            <div class="text-lg font-bold text-gray-900"><?= htmlspecialchars($service['price']) ?></div>
        </div>

    <?php endforeach;  ?>

</div>