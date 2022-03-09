<?php
  $con = mysqli_connect("localhost", "root", ""); 
  if (!$con) {
    die("Connection error: " . mysqli_error($con));
  }
  mysqli_select_db($con,"mydb") or die(mysqli_error());
  
  if ($_POST["actionu"] == 3) {
    // Adds a new record
    $sql = "INSERT INTO bookings (name,email,date,hour,number) 
            VALUES ('" . $_POST["nu"] . "','" . $_POST["eu"] . 
            "','" . $_POST["du"] . "','" . $_POST["hu"] . "','" . $_POST["pu"] . "')";
    $result = mysqli_query($con,$sql);
    echo "La tua prenotazione è avvenuta con successo";
  } else if ($_POST["actionu"] == -1) {
    echo "Prenotazione non riuscita";
  }
  echo '<br><br>Back to <a href="contattiprenotazioni.html">prenotazioni</a>';
?>