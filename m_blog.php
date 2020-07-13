<?php
function getDescriptionAllNews($on_start, $num_news_page) {
	$query  = "SELECT `id_article`, `title`, MID(`content` , 1, 300) AS `description`, `date_puplish`
			  FROM `articles`
			  ORDER BY `id_article` DESC LIMIT ".$on_start.", ".$num_news_page;
			  
	$result = mysql_query($query) or die('Ошибка базы данных '. mysql_error());
	
	/*------------------	v1	-------------------------*/
	// $i = 0;
	// while ($row = mysql_fetch_assoc($result)) {
		// $arr[$i]['id_article']   = $row['id_article'];
		// $arr[$i]['title']        = $row['title'];
		// $arr[$i]['description']  = $row['description'];
		// $arr[$i]['date_puplish'] = $row['date_puplish'];
		// $i++;
	// }
	/*--------------------------------------------------*/
	
	/*------------------	v2	-----------------------*/
	$j = 0;
	while ($row = mysql_fetch_assoc($result)) {
        $arr[$j]= $row;
        $j++;
    }
	return $arr;
}

function getNumAllNews() {
	$query  = "SELECT count(`id_article`) FROM `articles`";
	$result = mysql_query($query) or die ('Ошибка базы данных ' . mysql_error());
	$row    = mysql_fetch_row($result);
	$n      = (int)$row[0];
	return $n;
}
?>