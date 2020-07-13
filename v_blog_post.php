<!DOCTYPE HTML>
<html>
<head>
    <title>Обзор статьи</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css" />
</head>
<body>
<?php require_once('includes/header.php'); ?>
<div id="content">

    <div id="posts">
        <div class="post">
            <h2><?=$arr['title'];?></h2>
            <span><img src="images/pencil.gif" alt="" width="446" height="30" /></span>
            <div>
                <span class="date"><?=$arr['date_puplish'];?></span>
                <span class="categories">/категория/<?=$arr['id_article'];?></span>
            </div>
            <div class="description">
               <?=$arr['content'];?>
            </div>
                 <p class="comments"><a href="blog.php?page=<?=$page_blog;?>">к списту новостей</a></p>
		</div>
        <!-- тут коменты -->
		<?php require_once('coments.php'); ?>
		<!-- законсились коменты -->
    </div>

<?php require_once('includes/sidebar.php'); ?>
</div>
<?php require_once('includes/footer.php'); ?>
</body>
</html>