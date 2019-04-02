<html>
<head>
	<title>Главная страница - страница обо мне</title>
</head>
<body>
<center><h1>MLG Blog</h1></center>
<br/><br/>
</center>
<br/><br/>
<font style="color:green">Проба цветовых фильтров для текста)</font>
<br/><br/>
<b>Просто пример жирного текста</b>
<br/><br/>
   <?php
    $mass = "Mass.json";
    $content = file_get_contents($mass);
    $content = json_decode($content,true);
    print_r($content);
?>
</body>
</html>
