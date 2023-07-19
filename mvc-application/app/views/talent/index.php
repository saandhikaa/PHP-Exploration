<div class="row mx-3 my-4">
    <h2>Talent list</h2>
    <ul class="list-group">
        <?php foreach ($data['talent'] as $talent): ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <?= $talent['name_'] ?>
                <a href="<?= BASEURL ?>/talent/detail/<?= $talent['id'] ?>" class="text-decoration-none badge text-bg-primary">detail</a>
            </li>
        <?php endforeach ?>
    </ul>
</div>