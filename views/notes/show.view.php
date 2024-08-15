<?php require_once 'views/partials/head.php';?>
  <?php require_once 'views/partials/nav.php';?>
  <?php require_once 'views/partials/banner.php';?>

  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>Hello I am Note "<?php 
        foreach($posts as $post){
          echo htmlspecialchars($post['body']);
        }
    ?>"</p>
    

    </div>
  </main>
</div>


<?php require_once 'views/partials/footer.php';?>