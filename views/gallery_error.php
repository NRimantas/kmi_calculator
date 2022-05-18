<?php
include '../layouts/header.php'

?>
<!-- ERROR FOR UPLOADING -->
<div class=" container alert alert-danger d-flex align-items-center " role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
        <use xlink:href="#exclamation-triangle-fill" />
    </svg>
    <div>
        Files didn't upload, check your form.
    </div>

    <button type="button" class="btn btn-warning"><a href="http://localhost/PHP/another_form/views/picture_upload.php">Upload form</a></button>
</div>

<?php
include '../layouts/footer.php'

?>