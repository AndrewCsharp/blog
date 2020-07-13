<?php
require_once('dbconnect/startup.php');
require_once('m_new_posts.php');
startup();

/*=========================================================================================
$arr - массив с новостями
$num_news - ссколько всего новостей
$num_news_page - по сколько новостей на одной странице будет(по умолчанию)
$count_page - сколько подадобиться страниц
$on_start -  скакой позиции выводить
$on_stop - на какой остановиться
$count - кол-ко итераций при выводе новостей (фактическое кол-во новостей на странице)
=========================================================================================*/
$num_news_page = 3;
$num_news      = getNumNews();
$count_page    = ceil($num_news / $num_news_page);

$np = (int)strip_tags($_GET['page']);

$_SESSION['index_page'] = $_GET['page'];

if ($np > $count_page || $np < 0) {
	header("Location: 404.php");
	exit();
} elseif ($np === 0) {
	$on_start = 0;
	$on_stop  = $num_news_page - 1;
} else {
	$on_start = ($np * $num_news_page) - $num_news_page;// ($np-1) * $num_news_page
	$on_stop  = ($np * $num_news_page) - 1 ;
}

$arr   = selectNewArticles($on_start, $num_news_page);
$count = count($arr);

require_once('v_new_posts.php');
?>