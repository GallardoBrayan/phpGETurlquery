<?php

var_dump($_GET);


if (isset($_GET["name"]) && $_GET['name'] == 'lambo') {
	echo '<img src="https://i.ytimg.com/vi/bSm4Q9ZBeSA/maxresdefault.jpg" width="600px" height="300px"/>';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>hi</title>
</head>
<body>
    <a href="http://localhost:8888/imgresize/imgresize.php?name=lambo">
    	<img name="lambo" src="https://i.ytimg.com/vi/bSm4Q9ZBeSA/maxresdefault.jpg" width="400px" height="200px"/>
    </a>
</body>
</html>