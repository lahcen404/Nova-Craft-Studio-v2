<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-gray-100">
            
            <?php if ($success_message): ?>
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg border border-green-200">
                    <?= $success_message ?>
                </div>
            <?php endif; ?>

            <form action="/register" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="name" value="<?= $name ?? '' ?>" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500">
                    <?php if(isset($errors['name'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="email" name="email" value="<?= $email ?? '' ?>" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500">
                           <?php if(isset($errors['email'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= $errors['email'] ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500">
                    <?php if(isset($errors['password'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= $errors['password'] ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Register
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Already have an account? <a href="/login" class="text-blue-600 hover:text-blue-500 font-medium">Log in</a></p>
            </div>
        </div>
    </div>
</div>