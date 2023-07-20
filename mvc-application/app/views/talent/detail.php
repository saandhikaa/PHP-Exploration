<div class="row mx-3 my-4">
    <h2>Biography</h2>
    <div class="card w-75 mt-4">
        <div class="card-body">
            <h5 class="card-title mb-4"><?= $data['talent']['name_'] ?></h5>
            <?php
                foreach ($data['talent'] as $key => $value) {
                    if ($key !== "id" && $key !== "name_") {
                        $key = ucwords(rtrim($key, '_'));
                        if ($key === "Birthdate") {
                            $print = $key . ": " . date("M d, Y", strtotime($value));
                        } else {
                            $print = $key . ": " . $value;
                        }
            ?>
                        <p class="card-text mb-2"><?= $print ?></p>
            <?php
                    }
                }
            ?>
            <a href="<?= BASEURL ?>/talent" class="btn btn-primary mt-4">Back</a>
        </div>
    </div>
</div>