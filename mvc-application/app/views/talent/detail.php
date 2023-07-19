<div class="row mx-3 my-4">
    <h2>Biography</h2>
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title"><?= $data['talent']['name_'] ?></h5>
            <?php foreach ($data['talent'] as $key => $value): ?>
                <?php if ($key !== "id" && $key !== "name_"): ?>
                    <p class="card-text"><?= $key ?>: <?= $value ?></p>
                <?php endif ?>
            <?php endforeach ?>
            <a href="<?= BASEURL ?>/talent" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>