<html>
<meta charset="UTF-8">

<?php


$products = array("iPhone"=>"iphone.png", "iPad"=>"ipad.png", "Mac"=>"mac.png");

$product = array_rand($products, 1);
$url= 'http://beta.spaceth.co/FunRandom';

?>


<title>คุณจะได้ซื้อ <?php echo $product; ?> ในปีนี้</title>
<meta property="og:title"  content="คุณจะได้ซื้อ <?php echo $product; ?>">
<meta property="og:description"content="คุณจะได้ซื้อ <?php echo $product; ?> แน่ ๆ ในปีนี้">

<body>


<h1><?php echo $product; ?></h1>
<img style="display:none; visibility:hidden; opacity:0;" src="<?php echo $url ?>/img/<?php echo $products[$product]; ?>"></p>




</body>
</html>
