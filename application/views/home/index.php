<?php


include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>"> -->
</head>
<body>
    <section>
    <div class='col-md-3 col-xs-6'>
									<div class='product-img'>
                                    <img src="<?= base_url('assets/images/menus/'.$item['photo']) ?>" alt="<?= $item['name']; ?>"> 
										<div class='product-label'>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'><?= $item['name']; ?></p>
										<h4 class='product-price header-cart-item-info'><?= $item['description']; ?></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='"<?= 'https://'.$item['whatsapp_link'] ?>"'><i class='fa fa-shopping-cart'></i> pesan </button>
									</div>
								</div>
                                </div>
							
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