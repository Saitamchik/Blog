<html>
<head>
</head>
<body>
<center><h2>MLG Blog</h2></center>
<br/><br/>
<br/><br/>
   <?php
    $mass = "Mass.json";
    $content = file_get_contents($mass);
   $content = json_decode($content,true);
    $massiv = array(
    1 => "Post_1",
    2 => "Post_2",
    3 => "Post_3",
);
    $id = 1;
    while($id<4){
echo($massiv[$id]);
$id++;
};
    ?>
<br/><br/>
<center> <a href="https://github.com/Saitamchik/Blog">Репозиторий</a></center>
</body>
</html>
