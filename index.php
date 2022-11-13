<?php
include "header.php";
?>

    <!-- start #main-site -->
        <main id="main-site">

          <!-- Owl-carousel -->
           <?php
           include 'Template/_banner-area.php';
           ?>
          <!-- !Owl-carousel -->

          <!-- Top Sale -->
         <?php
           include 'Template/_top-sale.php';
           ?>
        <!-- !Top Sale -->

        <!-- Special Price -->
         <?php
           include 'Template/_special-price.php';
           ?>
        <!-- !Special Price -->

        <!-- Banner Ads  -->
         <?php
           include 'Template/_banner-ads.php';
           ?>
        <!-- !Banner Ads  -->

          <!-- New Phones -->
          <?php
           include 'Template/_new-phones.php';
           ?>
          <!-- !New Phones -->

          <!-- Blogs -->
            <?php include ('Template/_blogs.php');?>

            
          <!-- !Blogs -->

        </main>
    <!-- !start #main-site -->

    <?php
    include 'footer.php'; 
    ?>