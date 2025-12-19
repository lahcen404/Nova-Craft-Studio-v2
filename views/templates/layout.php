<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/tailwind-css/src/output.css">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-50 text-gray-800">
    <?php var_dump($_SESSION); ?>

    <?php require_once __DIR__ . '/header.php'; ?>

    <main class="container mx-auto p-6">
        <?php require_once $content_file; ?>
    </main>

    <?php require_once __DIR__ . '/footer.php'; ?>

</body>
</html>