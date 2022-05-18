<?php
include '../layouts/header.php';

// COUNTING KMI
$colorKMI = $cm = $kg = $kmi = $output = $result = '';

if (isset($_GET['submit'])) {
    $weight = $_GET['kg'];
    $height = $_GET['cm'];
    
    $kmi = (float)((int)$weight/((int)$height/100)**2);

    // $kmi = kmi($weight, $height);
    if ($kmi <= 18.5) {
        $output = "Under Weight";
        $colorKMI = 'danger';
        
    } else if ($kmi > 18.5 && $kmi <= 24.9) {
        $output = "Normal Weight";
        $colorKMI = 'success';
        
    } else if ($kmi > 24.9 && $kmi <= 29.9) {
        $output = "Over Weight";
        $colorKMI = 'danger';
    } else if ($kmi > 30.0) {
        $output = "Obese";
        $colorKMI = 'danger';
    }
    $kmi = round($kmi, 2);
} 
    




?>
<div class="container-fluid bg-<?php echo $colorKMI; ?>">
    <div class="container mt-5 pt-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="card text-center">
                <div class="card-header">
                    <h5>To calculate your KMI, please enter your weight and height.</h5>
                </div>
                <div class="card-body">
                    <div class="row my-2">
                        <div class="col">

                            <input type="text" class="form-control" name="cm" placeholder="Your height by centimeters">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="kg" placeholder="Your weight KG">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Calculate</button>
                </div>
                <h3>Your KMI is: <?php echo $kmi; ?></h3>
                <h4>Result: <?php echo $output; ?> ! </h4>

            </div>
        </form>
    </div>
</div>









<?php
include '../layouts/footer.php'

?>