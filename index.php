<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 


require_once('Modelos/PostEntity.php');

$post = new PostEntity();

?><pre><?php var_dump($post)?></pre><?php

$post->setTitulo("Mi primer post");
?>
<pre><?php echo $post->getTitulo()?></pre>