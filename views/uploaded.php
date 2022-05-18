<?php
var_dump($_POST);
$title1 = $title2 = $title3 = $title4 = $color = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_FILES['image1']['name']) && !empty($_FILES['image2']['name']) && !empty($_FILES['image3']['name']) && !empty($_FILES['image4']['name'])) {
        $uploaded = 1;

        foreach ($_FILES as $image) {
            $targetDir = "../uploads/";
            $imageName = "image" . $uploaded . ".jpg";
            $targetFile = $targetDir . basename($image['name']);
            $uploadValid = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $targetFile = $targetDir . $imageName;
            $tempFile = $image['tmp_name'];

            // checking is file is an image 
            $check = getimagesize($tempFile);
            if ($check !== false) {
                // echo 'File is an image - '.$check['mime'];
            } else {
                // echo 'test';
                include '../views/gallery_error.php';
                die;
            }


            // check uploaded right extension

            $extensions = ["jpg", "png", "jpeg"];
            if (($imageFileType && $extensions) === false) {
                include '../views/gallery_error.php';
                die;
            }

            if (!move_uploaded_file($tempFile, $targetFile)) {
                include '../views/gallery_error.php';
                die;
            }
            $uploaded++;
        }
        $title1 = $_POST['title1'];
        $title2 = $_POST['title2'];
        $title3 = $_POST['title3'];
        $title4 = $_POST['title4'];
        $color = $_POST['color'];
        include '../views/gallery.php';
    } else {

        include '../views/gallery_error.php';
        die;
    }
} else {

    include '../views/gallery_error.php';
}
?>