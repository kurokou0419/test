<?php
	mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$pdo->exec("insert into 4each_keijiban(handlename,title,comments) values('".$_POST['name']."','".$_POST['title']."','".$_POST['comments']."');");
header("Location:http://localhost/4each_keijiban/index.php");

?>

<!--
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>投稿完了</title>
	<link rel="stylesheet" type="text/css" href="./style2.css">	
</head>
<body>
	<?php
		$pdo->exec("select title,handolename from  4each_keijiban;");
	?>
</body>	
</html>
-->