<?php if(count($errors)>0): ?>
  <div class="form-group">
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($errors->all() as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
<?php endif;?>