<?php
include '../layouts/header.php';

?>

<div class="container py-4">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Please Upload 4 Images to Gallery</div>
                <div class="card-body">
                    <form action="http://localhost/PHP/another_form/views/uploaded.php" method='POST' enctype="multipart/form-data" >
                        <!-- UPLOAD FILES AND ADD TITLE -->
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="title1" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image2">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="title2" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image3">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="title3" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image4">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="title4" placeholder="Image Title">
                            </div>
                        </div>

                        <!-- BACKGROUND - COLOR - PICK -->
                        <label for="select">Select background-color:</label>
                        <select class="form-select" aria-label="Default select example" name="color">
                            <option selected>Open this select menu</option>
                            <option value="danger" >Red</option>
                            <option value="secondary">Grey</option>
                            <option value="primary">Blue</option>
                        </select>
                        <br>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




























<?php
include '../layouts/footer.php'

?>