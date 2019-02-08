<?php include '../partials/_head.php'  ?>
<?php include '../partials/_navbar.php'  ?>


<?php


  include '../function.php';


  $id = $_GET['id'];
  $ospiteshow = findOspiteById($id);

  if (empty($ospiteshow))
  {
    echo 'errore';
  }
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Aggiorna dati ospite con id: <?php echo $_GET['id']; ?> </h1>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="form-group" method="post" action="http://localhost/php-boolcrud/update/server.php">
          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
          <div class="form-group">
            <label for="name">Inserisci il nome</label>
            <input type="text" class="form-control" name="name" value="<?php echo $ospiteshow['name']; ?>">

          </div>
          <div class="form-group">
            <label for="lastname">Inserisci il cognome</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $ospiteshow['lastname']; ?>">

          </div>
          <div class="form-group">
            <label for="date_of_birth">Inserisci data di nascita</label>
            <input type="text" class="form-control" name="date_of_birth" value="<?php echo $ospiteshow['date_of_birth']; ?>">

          </div>
          <div class="form-group">
            <label for="document_type">Inserisci il tipo di documento</label>
            <input type="text" class="form-control" name="document_type" value="<?php echo $ospiteshow['document_type']; ?>">

          </div>
          <div class="document_number">
            <label for="">Inserisci il numero di documento</label>
            <input type="text" class="form-control" name="document_number" value="<?php echo $ospiteshow['document_number']; ?>">

          </div>
          <div class="form-group">
            <input type="submit"name="submit" value="salva">

          </div>
        </form>

<?php include '../partials/_footer.php'  ?>
