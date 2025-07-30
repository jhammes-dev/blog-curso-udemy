<?php
include_once("templates/header.php");
?>

<!-- INICIO HTML -->
   <main>
      <div id= "title-container">
         <h1>Blog 404-Buglândia</h1>
         <p><h4>Onde os erros viram histórias e os bugs, aprendizado.</h4></p>
      </div>

      <div id="posts-container">
         <?php foreach($posts as $post): ?>
            <div class="post-box">
               <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">

               <h2 class="post-title">
                  <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?> </a>
               </h2>

               <p class="post-description"> <?= $post['description'] ?></p>

               <div class="tags-container">
                  <?php foreach($post['tags'] as $tag): ?>
                     <a href="#"><?= $tag ?> </a>
                  <? endforeach ?>
               </div>
            </div>

         <? endforeach ?>
      </div>
   </main>
<!-- FIM HTML -->

<?php
include_once("templates/footer.php");
?>