<div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="dynamicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dynamicModalLabel"><?=$modal_title??''?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modalForm" action="<?= $modal_form_action??'#' ?>" method="post">
                    <?php foreach ($modal_fields as $field): ?>
                        <div class="mb-3">
                            <label for="<?= $field['name'] ?>" class="form-label"><?= $field['label'] ?></label>
                            <input type="<?= $field['type'] ?>" class="form-control" name="<?= $field['name'] ?>" id="<?= $field['name'] ?>" value="<?= old($field['name']) ?>" required="<?= $field['required'] ?>">
                        </div>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal() {
        var myModal = new bootstrap.Modal(document.getElementById('dynamicModal'));
        myModal.show();
    }
</script>
