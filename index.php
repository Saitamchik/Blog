<html>
<head>
	<title>Главная страница - страница обо мне</title>
</head>
<body>
<center><h2>MLG Blog</h2></center>
<br/><br/>
</center>
<br/><br/>
   <?php
//    $mass = "Mass.json";
//    $content = file_get_contents($mass);
//   $content = json_decode($content,true);
//    print_r($content);
    $massiv = array(
    "1" => "Post_1",
    "2" => "Post_2",
    "3" => "Post_3",
);
    $id = 1;
    while($id<4){
print_r($massiv[$id]);
$id++;
};
    ?>
</body>
</html>
