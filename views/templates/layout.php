
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/tailwind-css/src/output.css">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-50 text-gray-800">
    <!-- <?php var_dump($_SESSION); ?> -->

    <?php require_once __DIR__ . '/header.php'; ?>

    <?php if(isset($_SESSION['flash_msg'])): ?>

        <div class="container mx-auto mt-4 px-6">
        <div class="p-4 rounded-md border 
            <?= ($_SESSION['flash_type'] === 'success') ? 'bg-green-100 text-green-700 border-green-200' : 'bg-red-100 text-red-700 border-red-200' ?>">
            
            <?= $_SESSION['flash_msg']; ?>

            <?php 
                unset($_SESSION['flash_msg']); 
                unset($_SESSION['flash_type']); 
            ?>
        </div>
    </div>

    <?php endif ?>
    <main class="container mx-auto p-6">
        <?php require_once $content_file; ?>
    </main>

    <?php require_once __DIR__ . '/footer.php'; ?>

</body>
</html>