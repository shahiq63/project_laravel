<?php include ('resources/views/navbar.blade.php');?>

<?php include ('resources/views/errors.blade.php');?>
<div class="container">
  <div class="col-sm-6">
    <form method="POST" action="../posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="Title">Title:</label>
        <input type="text" class="form-control" name="title" id="title" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <input type="text" class="form-control" name="body" id="body" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php include ('resources/views/footer.blade.php');?>