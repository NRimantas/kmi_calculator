<!-- Sukurkite matavimo vienetų konverterį. Įvedus bet kurį matavimo vienetą, turi perskaičiuoti kitus. Reikalavimai: 1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje. 2. Naudojame POST metodą 3. Matavimo vienetus pasirinkti patiems. Temperatūra, atstumas, greitis ir pan. 4. Turi būti bent keturi matavimo vienetai -->
<?php
include '../layouts/header.php';

$dollar = $euro = $ruble = $yuan = '';

if (isset($_POST['submit'])) {
    $dollar = $_POST['dollar'];
    $euro = $_POST['euro'];
    $ruble = $_POST['ruble'];
    $yuan = $_POST['yuan'];

    if ($_POST['dollar']) {
        $euro = round(((int)$dollar * 0.89), 2);
        $ruble = round(((int)$dollar / 0.013), 2);
        $yuan = round(((int)$dollar * 0.16), 2);
    } elseif ($_POST['euro']) {
        $dollar = round(((int)$euro / 0.89), 2);
        $ruble = round(((int)$euro / 0.011), 2);
        $yuan = round(((int)$euro * 7.13), 2);
    } elseif ($_POST['ruble']) {
        $euro = round(((int)$ruble * 0.011), 2);
        $dollar = round(((int)$ruble * 0.013), 2);
        $yuan = round(((int)$ruble * 0.079), 2);
    } elseif ($_POST['yuan']) {
        $euro = round(((int)$yuan / 7.13), 2);
        $ruble = round(((int)$yuan * 0.079), 2);
        $dollar = round(((int)$yuan / 6.32), 2);
    }

    if (isset($_POST['clear'])) {
        header('Location : http://localhost/PHP/another_form/views/converter.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERTER</title>
</head>

<body>
<!-- MONEY CONERTER -->
    <div class="container-fluid ">
        <div class="container mt-5 pt-5">
            <form method="POST">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Convert you currency</h5>
                    </div>
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col">
                                <label for="dollar">Dollars:</label>
                                <input type="text" class="form-control" name="dollar" placeholder="0" value="<?php echo $dollar; ?>">
                            </div>
                            <div class="col">
                                <label for="dollar">Euro:</label>
                                <input type="text" class="form-control" name="euro" placeholder="0" value="<?php echo $euro; ?>">
                            </div>
                            <div class="col">
                                <label for="dollar">Russian ruble:</label>
                                <input type="text" class="form-control" name="ruble" placeholder="0" value="<?php echo $ruble; ?>">
                            </div>
                            <div class="col">
                                <label for="dollar">China Yuan:</label>
                                <input type="text" class="form-control" name="yuan" placeholder="0" value="<?php echo $yuan; ?>">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Convert</button>
                        <button type="submit" name="clear" class="btn btn-success">Clear</button>
                    </div>


                </div>
            </form>
        </div>
    </div>


</body>

</html>




<?php
include '../layouts/footer.php'

?>