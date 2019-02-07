<?php


  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error)
  {
    echo 'errore' . $conn->connect_error;
  }

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $birth = $_POST['date_of_birth'];
  $document = $_POST['document_type'];
  $documentnumber = $_POST['document_number'];

  var_dump($name);
  var_dump($lastname);
  var_dump($birth);
  var_dump($document);
  var_dump($documentnumber);



  $sql = "INSERT INTO `ospiti` (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`)
  VALUES ('$name', '$lastname', '$birth', '$document', '$documentnumber');";



  $result = $conn->query($sql);
  var_dump($result); die();


  $conn->close();

?>
