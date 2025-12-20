<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Contact Messages</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
        <table class="min-w-full leading-normal">
            <thead>
                <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Date</th>
                    <th class="py-3 px-6 text-left">Sender</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Message</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                    <?php if (empty($messages)): ?>
                    <tr><td colspan="4" class="py-10 text-center text-gray-400">No messages found !!!</td></tr>
                    <?php else: ?>
                        <?php foreach($messages as $msg): ?>
                        <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                            <td class="py-3 px-6"><?= date('M d, H:i' , strtotime($msg['created_at'])) ?></td>
                            <td class="py-3 px-6 font-medium text-gray-900"><?= htmlspecialchars($msg['name'])?></td>
                            <td class="py-3 px-6"><?=htmlspecialchars ($msg['email'])?></td>
                            <td class="py-3 px-6">
                                <p class="line-clamp-2" title="<?= htmlspecialchars($msg['message']) ?>">
                                    <?= htmlspecialchars($msg['message']) ?>
                                </p>
                            </td>
                        </tr>
                   <?php endforeach ?>
                   <?php endif ?>
            </tbody>
        </table>
    </div>
</div>