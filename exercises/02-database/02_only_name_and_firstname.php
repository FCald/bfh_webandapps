
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<?php

$hostname = "localhost";
$username = "root";
$password = "";

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=medicalinformatics", $username, $password);

    $query = "select name, first_name from patient";

    $stmt = $dbh->query($query);

    while($patient = $stmt->fetch()) {

      //print_r($patient);

      //| patientID | MRN   | name      | first_name | gender | birthdate  |
      echo "<b>name:</b> ".$patient['name']."<br>";
      echo "<b>first_name:</b> ".$patient['first_name']."<br>";
      echo "<br>";
    }

}
catch(PDOException $ex) {
  echo $ex;
}
?>
  
</body>
</html>



