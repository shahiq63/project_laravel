<?php include ('resources/views/navbar.blade.php');?>
<ul>
  <?php foreach ($tasks as $task): ?>
    <li>
      <a href="tasks/<?php echo $task->id?>">
        <?php echo $task->title ?>
      </a>
    </li>
  <?php endforeach ?>
    </ul>
  </h1>
<?php include ('resources/views/footer.blade.php');?>  