<?php
require_once __DIR__ . '/vendor/classes/Posts.php';
$postObj = new Posts();
$post = $postObj->showPost($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>Пост <?php echo $post['title']; ?> автор - <?php echo $post['author']; ?></title>
</head>

<body>
  <div class="page">
    <header class="header">
      <h1 class="header__title">Блог друзей</h1>
    </header>
    <div class="navigation">
      <button class="back-button" onclick="window.history.back()">← Вернуться назад</button>
    </div>
    <article class="post-full">
      <h1 class="post-full__title"><?php echo $post['title']; ?></h1>
      <img src="https://via.placeholder.com/800x400/007bff/ffffff?text=Япония" alt="Япония" class="post-image">
      <div class="post-full__content">
        <p><?php echo $post['text']; ?></p>
      </div>
      <div class="tags">
        <?php foreach ($post['tags'] as $tag) { ?>
          <span class="tag"><?php echo $tag; ?></span>
        <?php } ?>
      </div>
      <div class="post-full__meta">
        Опубликовано: <?php echo $post['published']; ?>. | Автор: <?php echo $post['author']; ?> | Время чтения: <?php echo $post['reading_time']; ?>
      </div>
    </article>
    <div class="navigation">
      <button class="back-button" onclick="window.history.back()">← Вернуться назад</button>
    </div>
  </div>
</body>

</html>
