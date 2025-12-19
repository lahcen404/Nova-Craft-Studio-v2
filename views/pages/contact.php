<h2 class="text-4xl font-extrabold text-gray-900 mb-8 border-b pb-2">Contact Us</h2>

<div class="bg-white p-8 rounded-lg shadow-xl max-w-lg mx-auto">
    
    <?php if (!empty($success_message)): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline"><?= htmlspecialchars($success_message) ?></span>
        </div>
    <?php endif; ?>

    <form action="/contact" method="POST">
        
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Full Name *</label>
            <input type="text" id="name" name="name" 
                   value="<?= htmlspecialchars($name ?? '') ?>"
                   class="shadow appearance-none border <?= isset($errors['name']) ? 'border-red-500' : 'border-gray-200' ?> rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   required>
            <?php if (isset($errors['name'])): ?>
                <p class="text-red-500 text-xs italic mt-2"><?= htmlspecialchars($errors['name']) ?></p>
            <?php endif; ?>
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email *</label>
            <input type="email" id="email" name="email" 
                   value="<?= htmlspecialchars($email ?? '') ?>"
                   class="shadow appearance-none border <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-200' ?> rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   required>
            <?php if (isset($errors['email'])): ?>
                <p class="text-red-500 text-xs italic mt-2"><?= htmlspecialchars($errors['email']) ?></p>
            <?php endif; ?>
        </div>

        <div class="mb-6">
            <label for="message" class="block text-gray-700 font-bold mb-2">Message *</label>
            <textarea id="message" name="message" rows="5"
                      class="shadow appearance-none border <?= isset($errors['message']) ? 'border-red-500' : 'border-gray-200' ?> rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                      required><?= htmlspecialchars($message ?? '') ?></textarea>
            <?php if (isset($errors['message'])): ?>
                <p class="text-red-500 text-xs italic mt-2"><?= htmlspecialchars($errors['message']) ?></p>
            <?php endif; ?>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150">
                Send Message
            </button>
        </div>
    </form>
</div>