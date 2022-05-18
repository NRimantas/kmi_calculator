<?php
include '../layouts/header.php';

?>
    <!-- IMAGE CARDS -->
    <div class="container ">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col ">
                <div class="card bg-<?php echo $color; ?>">
                    <img src="http://localhost/PHP/another_form/uploads/image1.jpg" class="card-img-top" alt="image1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title1; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-<?php echo $color; ?>">
                    <img src="http://localhost/PHP/another_form/uploads/image2.jpg" class="card-img-top" alt="image2">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title2; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-<?php echo $color; ?>">
                    <img src="http://localhost/PHP/another_form/uploads/image3.jpg" class="card-img-top" alt="image3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title3; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-<?php echo $color; ?>">
                    <img src="http://localhost/PHP/another_form/uploads/image4.jpg" class="card-img-top" alt="image4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title4; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
include '../layouts/footer.php'

?>