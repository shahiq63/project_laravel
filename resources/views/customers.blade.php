 <?php include ('resources/views/navbar.blade.php');?>
<ul>
  <?php foreach ($customers as $customer): ?>
    <li>
      <a href="">
        <?php echo $customer->name ?>
      </a>
    </li>
  <?php endforeach ?>
    </ul>
  </h1>
<?php include ('resources/views/footer.blade.php');?>  