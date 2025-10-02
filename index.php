<?php
require_once __DIR__ . '/vendor/classes/Posts.php';

$postsObj = new Posts();
$posts = $postsObj->showPosts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>Персональный блог</title>
</head>

<body>
  <div class="page">
    <header class="header">
      <h1 class="header__title">Блог друзей</h1>
    </header>
    <section class="posts-section">
      <h2 class="posts-section__subtitle">Посты</h2>
      <ul class="posts-list">
        <?php foreach ($posts as $post) { ?>
          <li class="post">
            <h3 class="post__title"><?php echo $post['title']; ?></h3>
            <p class="post__text"><?php echo $post['text']; ?></p>
            <a href="<?php echo $post['link']; ?>" class="post__link">Читать</a>
          </li>
        <?php } ?>
      </ul>
    </section>
  </div>
</body>

</html>
