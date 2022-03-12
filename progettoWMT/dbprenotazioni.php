<?php
  $con = mysqli_connect("localhost", "root", ""); 
  if (!$con) {
    die("Connection error: " . mysqli_error($con));
  }
  mysqli_select_db($con,"mydb") or die(mysqli_error());

  echo "<h2>Risultato</h2>";
  
  if ($_POST["action"] == 1) {
    // Displays all records
    $result = mysqli_query($con,"SELECT * FROM bookings"); 
    while($row = mysqli_fetch_assoc($result)){
      echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Mail: " . $row['email'] . ", Date: " . $row['date'] . 
           ", Hour: " . $row['hour'] . ", Number: " . 
           $row['number'] . "<br>";
    }
  } elseif ($_POST["action"] == 2) { 
    // Displays the record corresponding to a specific name
    $result = mysqli_query($con,"SELECT * FROM bookings WHERE name = " . 
                          "'" . $_POST['n'] . "'");
    $row = mysqli_fetch_assoc($result);
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Mail: " . $row['email'] . ", Date: " . $row['date'] . 
           ", Hour: " . $row['hour'] . ", Number: " . 
           $row['number'] . "<br>";
  } elseif ($_POST["action"] == 3) { 
    // Adds a new record
    $sql = "INSERT INTO bookings (name,email,date,hour,number) 
            VALUES ('" . $_POST["n"] . "','" . $_POST["e"] . 
            "','" . $_POST["d"] . "','" . $_POST["h"] . "','" . $_POST["p"] . "')";
    $result = mysqli_query($con,$sql);
    echo "Record added";
  } elseif ($_POST["action"] == 4) {
    // Deletes the record corresponding to a specific name
    $sql = "DELETE FROM bookings WHERE name='" . $_POST["n"] . "'";
    $result = mysqli_query($con,$sql);
    echo "Record deleted";
  }
  echo '<br><br>Back to <a href="areariservata.php">area riservata</a>';
?>