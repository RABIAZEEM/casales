<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'casales';
  $mysqli = @new mysqli(
   
  );
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }
  $sql = "SELECT * FROM casalverano WHERE id=" .$id;
  $result = $conn->query($sql);
  ?>

    <table class="table">
      <thead>
        <tr>
         
          <th scope="col">Nombre</th>
          <th scope="col">edad</th>
          <th scope="col">horario</th>
          <th scope="col">lugar</th>
        </tr>
      </thead>
      <tbody gag>
  <?php while($row = $result->fetch_assoc()) { ?>
    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src=<?php $row['image']; ?> class="d-block mx-lg-auto img-fluid" alt= width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>
        <tr>
          <th scope="row"><?php echo $row ['id'];?></th>
          <td> <?php $row['titol']; ?></td>
          <td>Editor</td>
          <td>3290420</td>
          <td>hyhy</td>
          <td>543534</td>
          </tr>
    <?php } ?>
          </tbody>
        </table>
<?php
  $mysqli->close();
?>
