<?php

$errors = [];
$data = ['name' => '', 'email' => '', 'message' => ''];
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $data['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $data['message'] = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (empty($data['name'])) {
        $errors['name'] = 'Full name is required.';
    }
    if (empty($data['email'])) {
        $errors['email'] = 'Email address is required.';
    }
    if (empty($data['message'])) {
        $errors['message'] = 'Message is required.';
    }
    if (!empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if (count($errors) === 0) {
        $success_message = 'Your message has been sent successfully!';
        $data = ['name' => '', 'email' => '', 'message' => ''];
    }
}

?>

<h2 class="text-4xl font-extrabold text-gray-900 mb-8 border-b pb-2">Contact Us</h2>

<div class="bg-white p-8 rounded-lg shadow-xl max-w-lg mx-auto">
    
    <?php if ($success_message): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline"><?= htmlspecialchars($success_message) ?></span>
        </div>
    <?php endif; ?>

    <form action="https://formspree.io/f/xwpgqvnn" method="POST">
        
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Full Name *</label>
            <input type="text" id="name" name="name" 
                   value="<?= htmlspecialchars($data['name']) ?>"
                   class="shadow appearance-none border <?= isset($errors['name']) ? 'border-red-500' : 'border-gray-200' ?> rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   required>
            <?php if (isset($errors['name'])): ?>
                <p class="text-red-500 text-xs italic mt-2"><?= htmlspecialchars($errors['name']) ?></p>
            <?php endif; ?>
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email *</label>
            <input type="email" id="email" name="email" 
                   value="<?= htmlspecialchars($data['email']) ?>"
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
                      required><?= htmlspecialchars($data['message']) ?></textarea>
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
