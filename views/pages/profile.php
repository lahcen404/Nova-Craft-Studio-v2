<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100">
        <div class="h-32 bg-blue-600"></div>
        
        <div class="px-6 py-8 relative">
            <div class="absolute -top-12 left-6 w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-lg border-4 border-white">
                <span class="text-blue-600 text-4xl font-bold">
                    <?= strtoupper(substr($user_data['name'], 0, 1)) ?>
                </span>
            </div>

            <div class="mt-12">
                <h2 class="text-3xl font-bold text-gray-800"><?= htmlspecialchars($user_data['name']) ?></h2>
                <p class="text-gray-500">Member since: <?= date('M d, Y', strtotime($user_data['created_at'])) ?></p>
            </div>

            <div class="mt-8 border-t pt-6 space-y-4">
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider">Email Address</label>
                    <p class="text-gray-700 font-medium text-lg"><?= htmlspecialchars($user_data['email']) ?></p>
                </div>

                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider">Account ID</label>
                    <p class="text-gray-700 font-medium">#<?= $_SESSION['user_id'] ?></p>
                </div>
            </div>

            <div class="mt-10 flex space-x-3">
                <a href="/logout" class="bg-red-50 hover:bg-red-100 text-red-600 px-6 py-2 rounded-md font-medium transition">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>