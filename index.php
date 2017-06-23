<html>
<meta charset="UTF-8">

<?php
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$products = array("iPhone"=>"iPhone.png", "iPad"=>"iPad.png", "Mac"=>"Mac.png");
$product = array_rand($products, 1);
?>


<title>คุณจะได้ซื้อ <?php echo $product; ?> ในปีนี้</title>
<meta property="og:title"  content="คุณจะได้ซื้อ <?php echo $product; ?>">
<meta property="og:description"content="คุณจะได้ซื้อ <?php echo $product; ?> แน่ ๆ ในปีนี้">
<meta property="og:image"   content="<?php $actual_link ?>/img/<?php echo $products[$product]; ?> ">

<body>

<h1><?php echo $product; ?></h1>
<p><?php echo $products[$product]; ?></p>



</body>
</html>
