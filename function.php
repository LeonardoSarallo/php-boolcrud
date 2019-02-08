<?php



  function findOspiteById($id)
  {
    include 'env.php';
    
    $ospiteshow = [];
    $conn = new Mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error)
    {
      return $ospiteshow;
    }



    $sql = "SELECT * FROM `ospiti` WHERE `id` = $id LIMIT 1";

    $result = $conn->query($sql);



    if ($result->num_rows > 0)
    {
      $ospiteshow = $result->fetch_assoc();

    }


    return $ospiteshow;
  }
?>
