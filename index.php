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
<link rel="stylesheet" href="css/style.css"></link>
<body>

<img class="do-not-display" src="<?php echo $url ?>/img/<?php echo $products[$product]; ?>"></img>

<h1>สุ่มสินค้า Apple ที่คุณอาจจะได้ซื้อในปีนี้</h1>
<p>มาลองเล่นกันดูว่าในปีนี้คุณมีโอกาสจะได้ซื้อสินค้า Apple ตัวไหน ถ้าอยากรู้ ลองแชร์หน้านี้ไปใน Facebook สิ แล้วสินค้าที่คุณมีโอกาสจะซื้อจะโชว์ขึ้นมา</p>

<div class="fb-share-button"
  data-href="<?php echo $url ?>"
  data-layout="button_count">
</div>

<div class="logo"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
