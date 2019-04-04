	<?php
    $mass = "Mass.json";
    $content = file_get_contents($mass);
   $content = json_decode($content,true);
    $id = 1;
    ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<body>
    <div class="intro">
      <div class="conteiner">
    	<h1>MLG Blog</h1>
    
  <?php  foreach($content as $key => $value): ?>

  <h2><?php echo $key;?><h2 />
  <p><?php echo $value;?><p /><br />
   <?php endforeach; 
?>
<center> <a href="https://github.com/Saitamchik/Blog">Репозиторий</a></center>
            </div>
    </div>
</body>
</html>
