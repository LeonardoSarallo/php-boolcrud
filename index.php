
<?php include 'partials/_head.php'  ?>
<?php include 'partials/_navbar.php'  ?>
  <div class="container">
    <h1>Ospiti Hotel</h1>
    <div class="row">
      <div class="col-12">
        <a href="http://localhost/php-boolcrud/create/form.php" class="btn btn-secondary">Inserisci un nuovo ospite</a>
      </div>

    </div>
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Visualizza</th>
      </thead>
      <tbody>
      <?php include 'database.php'; ?>


      <?php  foreach ($ospiti as $ospite) { ?>
            <tr>
              <td><?php echo $ospite['id']; ?></td>
              <td><?php echo $ospite['name']; ?></td>
              <td><?php echo $ospite['lastname']; ?></td>
              <td><a href="http://localhost/php-boolcrud/show/show.php?id=<?php echo $ospite['id']; ?>" class="btn btn-primary">
                Visualizza ospite
              </a>
              </td>
            </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

<?php include 'partials/_footer.php'  ?>
