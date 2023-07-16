<div class="row mx-3 my-4">
    <h2>Daftar pacar</h3>
    <?php foreach ($data["pacarku"] as $pacarku): ?>
        <h4 class="fs-7 mt-2"><?= $pacarku["nama"]; ?></h4>
        <ul class="mx-3">
            <li><?= $pacarku["ultah"]; ?></li>
            <li><?= $pacarku["negara"]; ?></li>
        </ul>
    <?php endforeach; ?>
</div>