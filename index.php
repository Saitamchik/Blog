	<?php
    $mass = "Mass.json";
    $content = file_get_contents($mass);
   $content = json_decode($content,true);
    $id = 1;
    ?>
<html>
<head>
	<center><h2>MLG Blog</h2></center>
<br/><br/>
</head>
<body>
  <?php  foreach($content as $key => $value): ?>

  <h2><?php echo $key;?><h2 />
  <p><?php echo $value;?><p /><br />
   <?php endforeach; 
?>
<center> <a href="https://github.com/Saitamchik/Blog">Репозиторий</a></center>
</body>
</html>
