<html>
<meta charset="UTF-8">
<?php

/*  Edit these variable */

/*  Create array of your random items with their images */
$products = array("iPhone"=>"iphone.png", "iPad"=>"ipad.png", "Mac"=>"mac.png");
/*  Enter the URL of this page. */
$url= 'http://beta.spaceth.co/FunRandom';
/*  This is how many of the items will be random ** Don't have to modify **/
$product = array_rand($products, 1);

?>

<title>คุณจะได้ซื้อ <?php echo $product; ?> ในปีนี้</title>
<meta property="og:title"  content="คุณจะได้ซื้อ <?php echo $product; ?>">
<meta property="og:description"content="คุณจะได้ซื้อ <?php echo $product; ?> แน่ ๆ ในปีนี้">

<body>

<img style="display:none; visibility:hidden; opacity:0;" src="<?php echo $url ?>/img/<?php echo $products[$product]; ?>"></p>




</body>
</html>
