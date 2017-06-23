<html>
<meta charset="UTF-8">

<?php
$products = array("iPhone"=>"iPhone.png", "iPad"=>"iPad.png", "Mac"=>"Mac.png");
$product = array_rand($products, 1);
?>


<title>คุณจะได้ซื้อ <?php echo $product; ?> ในปีนี้</title>
<meta name="fragment" content="!">
<meta property="og:title"  content="คุณจะได้ซื้อ <?php echo $product; ?>">
<meta property="og:description"content="คุณจะได้ซื้อ <?php echo $product; ?> แน่ ๆ ในปีนี้">
<meta property="og:image"   content=" img/<?php echo $products[$product]; ?> "#!/>

<body>

<h1><?php echo $product; ?></h1>
<p><?php echo $products[$product]; ?></p>



</body>
</html>
