<div class="row mx-3 my-4">
    <h2>Talent list</h2>
    <div class="d-grid">
        <ul class="list-group">
            <?php foreach ($data['talent'] as $talent): ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $talent['name_'] ?>
                    <a href="<?= BASEURL ?>/talent/detail/<?= $talent['id'] ?>" class="text-decoration-none badge text-bg-primary">detail</a>
                </li>
            <?php endforeach ?>
        </ul>
        
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#newTalent">New Talent</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newTalent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="<?= BASEURL ?>/talent/newtalent" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Talent</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="birthplace" class="form-label">Birthplace</label>
                        <input type="text" class="form-control" id="birthplace" name="birthplace" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation</label>
                        <input type="text" class="form-control" id="occupation" name="occupation" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>