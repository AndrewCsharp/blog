<!DOCTYPE HTML>
<html>
<head>
    <title>Новые статьи</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css" />
</head>
<body>
<?php require_once('includes/header.php'); ?>
<div id="content">
    <div id="posts">
	
		<!-- начало поста -->
		<?php for($i= 0; $i < $count; $i++) :?>
        <div class="post">
            <h2><?=$arr[$i]['title'];?></h2>
            <span><img src="images/pencil.gif" alt="" width="446" height="30" /></span>
            <div>
                <span class="date"><?=$arr[$i]['date_puplish'];?></span>
                <span class="categories"><?=$arr[$i]['id_article'];?>|категория</span>
            </div>
            <div class="description">
               <p><?=$arr[$i]['description'];?><b>...</b></p>
            </div>
            <p class="comments">
				<a href="post_new.php?id_article=<?=$arr[$i]['id_article'];?>">подробнее ...</a>
			</p>
        </div>
		<?php endfor; ?>
		<!-- конец поста -->

		<!-- начало формирование ссылок -->
		<div class="post">
			<div class="list_link">
				<?php for ($i = 1; $i <= $count_page; $i++) :?>
				<div class="list_link_once"><a href="index.php?page=<?=$i;?>"><b><?=$i;?></b></a></div>
				<?php endfor;?>
			</div> 
		</div>
		<!-- конец формирование ссылок -->
		 
    </div>
     <?php require_once('includes/sidebar.php'); ?>
</div>
<?php require_once('includes/footer.php'); ?>
</body>
</html>