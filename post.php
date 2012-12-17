<?php

$id = (int)$_GET['id'];


$mysql = new mysqli('localhost', 'root', 'root', 'db') or die ('error en los datos de la base de datos');
$stmt = $mysql->prepare("SELECT id, title , body FROM posts WHERE id =$id");
$stmt->execute();
$stmt->bind_result($id, $title  , $body);



while ($row = $stmt->fetch()):


?>

	<h2><?php echo $title; ?></h2>
	<p><?php echo $body; ?></p>
	
<?php endwhile;?>