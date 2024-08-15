  <?php require_once 'views/partials/head.php';?>
  <?php require_once 'views/partials/nav.php';?>
  <?php require_once 'views/partials/banner.php';?>

  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    Hello Notes page

    <?php
    foreach ($posts as $post) {?>
        
        <li class="text-blue-500 hover:underline"><a href="/note?id=<?= htmlspecialchars($post['id'])?>"><?php echo htmlspecialchars($post['body'])?></a></li>

    <?php }?>
    
    <p class="mt-6">
      <a href="/notes/add">Add new note</a>
    </p>

    </div>
  </main>
</div>

<?php require_once 'views/partials/footer.php';?>