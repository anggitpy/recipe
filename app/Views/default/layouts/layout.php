<!doctype html>
<html>
<head>
    <title><?= $title ?></title>
    <?= $this->renderSection('css') ?>
</head>
<body>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>


    <?= $this->renderSection('js') ?>
</body>
</html>