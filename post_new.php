<?php
require_once('dbconnect/startup.php');
require_once('m_post.php');
startup();

if ($_SESSION['index_page'] == 0) {
    $page_index = 1 ;
} else {
    $page_index = $_SESSION['index_page'];
}

$id_article = (int)$_GET['id_article'];
$arr        = getPostById($id_article);
$maxIdNews  = (int)getMaxIdArticles();

if ($id_article > $maxIdNews || $id_article < 0 || ($arr == false)) {
    header("Location: 404.php");
    exit;
}

require_once('v_post_new.php');
?>