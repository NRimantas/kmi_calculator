<?php
// include '../layouts/header.php';


$username = $password = '';

$users = ['as' => 'as', 'tu' => 'tu', 'mes' => 'mes'];
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (array_key_exists($username, $users)) {

        foreach ($users as $user => $pass) {
            if ($password == $pass && $username == $user) {
                echo 'You are logged in! :)';
                exit;
            }
        }
    } else {
        echo 'Sorry, your username or password is wrong. Please try again!';
        exit;
    }
} else {
    header('Location: http://localhost/PHP/another_form/views/login.php');
}

?>

<?php
include '../layouts/footer.php'

?>