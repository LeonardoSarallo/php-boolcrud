<?php

  $servername = 'localhost';
  $username = 'root';
  $password = 'asd';
  $dbname = 'dbex3';

  $conn = new Mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error)
  {
    echo 'errore' . $conn->connect_error;
  }

  $sql = 'SELECT * FROM `ospiti`';


  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    $ospiti = [];

    while ($row = $result->fetch_assoc()) {
      $ospiti[] = $row;
    }
  }


  $conn->close();
?>
