<?php
$mysql = new mysqli('localhost', 'root', 'root', 'db') or die ('error en los datos de la base de datos');


$stmt = $mysql->prepare("SELECT id, title, LEFT(body, 20) as excerpt , body FROM posts");
$stmt->execute();
$stmt->bind_result($id, $title, $excerpt , $body);



while ($row = $stmt->fetch()):

	$space = strrpos($excerpt, ' ');	
	

?>

	<h2><a href="post.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h2>
	<p><?php echo substr($excerpt, 0, $space) . "<a href='post.php?id=$id'> leer mas </a>" ?></p>
	
<?php endwhile;?>