<?php
require_once('dbconnect/startup.php');
require_once('m_post.php');
startup();

if ($_SESSION['blog_page'] == 0) {
	$page_blog = 1;
} else {
	$page_blog = $_SESSION['blog_page'];
}

$id_article = (int)$_GET['id_article'];
$arr        = getPostById($id_article);
$maxIdNews  = (int)getMaxIdArticles();

if ($id_article > $maxIdNews || $id_article < 0 || ($arr == false)) {
	header("Location: 404.php");
    exit;
}

require_once('v_blog_post.php');
?>