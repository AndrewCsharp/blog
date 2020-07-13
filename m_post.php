<?php
function getPostById($id) {
	$query  = "SELECT id_article, title, content, date_puplish FROM articles WHERE id_article = ".$id;
	$result = mysql_query($query) or die ('Ошибка базы данных' . mysql_error());
	
	/*------------------	v1	-------------------------*/
	// while ($row = mysql_fetch_assoc($result)) {
		// $arr['id_article']   = $row['id_article'];
		// $arr['title']        = $row['title'];
		// $arr['content']      = $row['content'];
		// $arr['date_puplish'] = $row['date_puplish'];
	// }
	// return $arr;
	/*--------------------------------------------------*/
	
	/*------------------	v2	-----------------------*/
	$row = mysql_fetch_assoc($result);
	return $row;
}

function getMaxIdArticles() {
	$query  = "SELECT MAX(`id_article`) FROM `articles` ";
	$result = mysql_query($query) or die ('Ошибка базы данных' . mysql_error());
	$row    = mysql_fetch_row($result);
	return $row[0];
}
?>