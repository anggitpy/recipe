<?= $this->extend('default/layouts/layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
<?= $this->endsection() ?>

<?= $this->section('content') ?>

<table>
    <thead>
        <tr>
            <th>Recipe Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($recipes as $recipe): ?>
        <tr>
            <td><?= $recipe->recipe_name ?></td>
            <td><?= $recipe->recipe_description ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endsection() ?>