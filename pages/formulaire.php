<?php 
      require('../actions/securityAction.php');
      require('../actions/publishmenu.php');
?>
<link rel="stylesheet" href="../styles/form.css">
<link rel="stylesheet" href="../styles/mediaqueries2.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/navbar.php'; ?>
<body>
<div class="block2">
<div class="block-inside">
<br><br>
    <form class="container1" method="POST" enctype="multipart/form-data">

    <?php if(
      isset($errorMsg))
      {
        echo '<p class="message">'.$errorMsg.'</p>';
      } elseif(isset($successMsg)) 
      {
        echo '<p class="message">'.$successMsg.'</p>';
      }
      ?>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titre du menu</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description du menu</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Prix du menu</label>
        <input type="text" class="form-control" name="content">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input type="file" class="form-control" name="picture">
      </div>
      <br><br>
        <button type="submit" class="btn btn-primary" name="validate">Publier le menu</button>
    </form>
    </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>
</html>