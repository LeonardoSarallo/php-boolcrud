
<?php include 'partials/_head.php'  ?>
<?php include 'partials/_navbar.php'  ?>
  <div class="container">
    <h1>Ospiti Hotel</h1>
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
      </thead>
      <tbody>
      <?php include 'database.php'; ?>
      <?php  foreach ($ospiti as $ospite) { ?>
            <tr>
              <td><?php echo $ospite['id']; ?></td>
              <td><?php echo $ospite['name']; ?></td>
              <td><?php echo $ospite['lastname']; ?></td>
            </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

<?php include 'partials/_footer.php'  ?>
