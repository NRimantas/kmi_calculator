<?php 
  // var_dump($_POST);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $checkbox1 = $checkbox2 = $checkbox3 = $checkbox4 = $checkbox5 = $checkbox6 = $checkbox7 = $checkbox8 = $checkbox9 = $checkbox10 ='';
if(!empty($_POST)){
  echo 'Neužpildėte visų klausimų!';
}
echo '<br>';
echo '<br>';
  $correct = ['checkbox1' => 'true', 'checkbox2' => 'true', 'checkbox2' => 'true', 'checkbox3' => 'true', 'checkbox4' => 'true', 'checkbox5' => 'true', 'checkbox6' => 'true', 'checkbox7' => 'true', 'checkbox8' => 'true', 'checkbox9' => 'true', 'checkbox10' => 'true',];
if(isset($_POST['submit'])){
  $checkbox1 = $_POST['checkbox1'];
  $checkbox2 = $_POST['checkbox2'];
  $checkbox3 = $_POST['checkbox3'];
  $checkbox4 = $_POST['checkbox4'];
  $checkbox5 = $_POST['checkbox5'];
  $checkbox6 = $_POST['checkbox6'];
  $checkbox7 = $_POST['checkbox7'];
  $checkbox8 = $_POST['checkbox8'];
  $checkbox9 = $_POST['checkbox9'];
  $checkbox10 = $_POST['checkbox10'];

  $result = 0;
   
    
  
  if($checkbox1 == 'true'){
    $result++;
  }else{
    echo '1 - atsakymas klaidingas <br>';
  }
  
  if ($checkbox2 == 'true'){
    $result++;
  }else{
    echo '2 - atsakymas klaidingas <br>';
  }

  if ($checkbox3 == 'true'){
    $result++;
  }else{
    echo '3 - atsakymas klaidingas <br>';
  }



if ($checkbox4 == 'true'){
  $result++;
}else{
  echo '4 - atsakymas klaidingas <br>';
}

if ($checkbox5 == 'true'){
  $result++;
}else{
  echo '5 - atsakymas klaidingas <br>';
}
  

if($checkbox6 == 'true'){
  $result++;
}else{
  echo '6 - atsakymas klaidingas <br>';
}

if ($checkbox7 == 'true'){
  $result++;
}else{
  echo '7 - atsakymas klaidingas <br>';
}

if ($checkbox8 == 'true'){
  $result++;
}else{
  echo '8 - atsakymas klaidingas <br>';
}



if ($checkbox9 == 'true'){
$result++;
}else{
echo '9 - atsakymas klaidingas <br>';
}

if ($checkbox10 == 'true'){
$result++;
}else{
echo '10 - atsakymas klaidingas <br>';
}
  
  
  echo 'Jūs surinkote: '.$result.' balų.';
  
}
}
?>
