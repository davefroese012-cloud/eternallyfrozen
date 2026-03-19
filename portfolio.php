<?php include 'header.php'; ?>

<section class="min-h-screen pt-24 pb-20 bg-[#0a0005]">
  <div class="max-w-7xl mx-auto px-6">
    <h1 class="text-6xl text-center accent mb-16">PORTFOLIO</h1>
    
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <?php
      $dir = "Images/portfolio/";
      $images = glob($dir . "*.webp");
      sort($images);
      foreach($images as $img) {
        $filename = basename($img);
        $alt = str_replace(['.webp', '_', '-'], ['',' ',' '], $filename);
        echo '<a href="' . $img . '" data-lightbox="portfolio"><img src="' . $img . '" alt="' . $alt . '" class="w-full rounded-2xl gold-border"></a>';
      }
      ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>