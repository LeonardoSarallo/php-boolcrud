<?php include '../partials/_head.php'  ?>
<?php include '../partials/_navbar.php'  ?>

<?php


  include '../function.php';

  $ospiteshow = findOspiteById($_GET['id']);
  
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Ospite con id <?php echo $ospiteshow['id']; ?>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nome: <?php echo $ospiteshow['name']; ?></li>
          <li class="list-group-item">Cognome <?php echo $ospiteshow['lastname'] ?></li>
          <li class="list-group-item">Data di nascita: <?php echo $ospiteshow['date_of_birth']; ?></li>
          <li class="list-group-item">Tipo documento: <?php echo $ospiteshow['document_type']; ?></li>
          <li class="list-group-item">Numero documento: <?php echo $ospiteshow['document_number']; ?></li>
          <li class="list-group-item">Creato il: <?php echo $ospiteshow['created_at']; ?></li>
          <li class="list-group-item">Aggiornato il : <?php echo $ospiteshow['updated_at']; ?></li>
        </ul>
      </div>
    </div>

  </div>

</div>

<?php include '../partials/_footer.php'  ?>
