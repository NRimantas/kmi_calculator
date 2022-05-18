<?php
include '../layouts/header.php'

?>
<!-- ERROR IF PASSWORD OR EMAIL IS INVALID -->
<div class=" container alert alert-danger d-flex align-items-center " role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
        <use xlink:href="#exclamation-triangle-fill" />
    </svg>
    <div>
        Password or email isn't correct, please try again!
    </div>

    <button type="button" class="btn"><a href="http://localhost/PHP/another_form/views/login.php">Go back</a></button>
</div>


<?php
include '../layouts/footer.php'

?>