<?php
require_once('dbconnect/startup.php');
require_once('m_blog.php');
startup();

$_SESSION['blog_page'] = $_GET['page'];
$np = (int)strip_tags($_GET['page']);

$num_news_page = 3;
$num_news      = getNumAllNews();
$count_page    = ceil($num_news / $num_news_page);

if ($np > $count_page || $np < 0) {
	header("Location: 404.php");
	exit();
} elseif ($np === 0) {
	$on_start = 0;
	$on_stop = $num_news_page - 1;
} else {
	$on_start = ($np * $num_news_page) - $num_news_page;
	$on_stop = ($np * $num_news_page) - 1 ;
}
	
$arr   =  getDescriptionAllNews($on_start, $num_news_page);
$count = count($arr);

require_once('v_blog.php');
?>