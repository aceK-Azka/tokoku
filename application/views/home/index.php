<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title> -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>"> -->
<!-- </head> -->
<?php


include "header.php";

?>
    <section>
<?php if (!empty($menu)): ?>
	<?php foreach ($menu as $item): ?>
		<div class='col-md-3 col-xs-6'>
				<div class='product-img'>
          <img src="<?= base_url('assets/images/menus/'.$item['photo']) ?>" alt="<?= $item['name']; ?>" width="100" height="100"> 
					<div class='product-label'>
					</div>
				</div></a>
				<div class='product-body'>
					<p class='product-category'><?= $item['name']; ?></p>
					<h4 class='product-price header-cart-item-info'><?= $item['description']; ?></h4>
					<!-- <div class='product-rating'>
						<i class='fa fa-star'></i>
						<i class='fa fa-star'></i>
						<i class='fa fa-star'></i>
						<i class='fa fa-star'></i>
						<i class='fa fa-star'></i>
					</div> -->
									
				</div>
				<div class='add-to-cart'>
					<a href="<?= 'https://'.$item['whatsapp_link'] ?>"><button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist'><i class='fa fa-shopping-cart'></i> pesan </button></a>
				</div>
		</div>
  <?php endforeach; ?>
<?php else: ?>
          <p>No menu available.</p>
<?php endif; ?>
				
							
    </section>

<?php
include "footer.php";
?>
  
    <script src="<?= base_url('assets/script.js'); ?>"></script>
</body>

</html>


<!-- Future Addition:
1. Rating Info
<= $item['name']; ?> - Rating:
                            <php 
                            if(isset($item['rating'])){
                                echo number_format($item['rating'], 1);
                            } else {
                                echo 'Belum ada';
                            }
                            ?>
-->