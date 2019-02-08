<?php

 include '../env.php';


 $conn = new Mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error)
 {
   echo 'errore';
 }
 else {
   echo "ok";
 }

 $id = $_POST['id'];
 $name = $_POST['name'];
 $lastname = $_POST['lastname'];
 $birth = $_POST['date_of_birth'];
 $document = $_POST['document_type'];
 $documentnumber = $_POST['document_number'];


 if (empty($name) || empty($lastname) || empty($birth) || empty($document) || empty($documentnumber))
 {
   die('errore, compila tutto il form');
 }
 $sql = "UPDATE `ospiti` SET `name` = '$name', `lastname` = '$lastname', `date_of_birth` = '$birth', `document_type` = '$document', `document_number`= '$documentnumber' WHERE `id` = $id;";

 $result = $conn->query($sql);


 

 if ($result == true)
 {
   echo "ok server";
 }
 else {
   'errore';
 }


 $conn->close();


?>
