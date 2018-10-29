<?php include ('resources/views/navbar.blade.php');?>
<div class="container">
  <div>
    <h1>Title</h1>
    <h3><?php echo $tasks->title;?></h3>
  </div>
  <div>
    <h1>Body</h1>
    <h3><?php echo $tasks->body;?></h3>
  </div>
</div>
<?php include ('resources/views/footer.blade.php');?>