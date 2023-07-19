<div class="row mx-3 my-4">
    <h2>Daftar pacar</h2>
    <ul class="list-group">
        <?php foreach ($data["pacarku"] as $pacarku): ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <?= $pacarku["nama"]; ?>
                <a href="<?=BASEURL;?>pacar/detail/<?=$pacarku['id'];?>" class="text-decoration-none badge text-bg-primary">detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>