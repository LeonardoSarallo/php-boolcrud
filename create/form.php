<?php include '../partials/_head.php'  ?>
<?php include '../partials/_navbar.php'  ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Inserisci nuovo ospite</h1>
      </div>
      <div class="row">
        <div class="col-12">
          <form class="form-group">
            <div class="form-group">
              <label for="name">Inserisci il nome</label>
              <input type="text" class="form-control" name="name" value="">

            </div>
            <div class="form-group">
              <label for="lastname">Inserisci il cognome</label>
              <input type="text" class="form-control" name="lastname" value="">

            </div>
            <div class="form-group">
              <label for="date_of_birth">Inserisci data di nascita</label>
              <input type="text" class="form-control" name="date_of_birth" value="">

            </div>
            <div class="form-group">
              <label for="document_type">Inserisci il tipo di documento</label>
              <input type="text" class="form-control" name="document_type" value="">

            </div>
            <div class="document_number">
              <label for="">Inserisci il numero di documento</label>
              <input type="text" class="form-control" name="document_number" value="">

            </div>
            <div class="form-group">
              <input type="submit"name="submit" value="salva">

            </div>
          </form>

        </div>

      </div>
    </div>
  </div>
<?php include '../partials/_footer.php'  ?>
