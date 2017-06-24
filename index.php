<html>
<meta charset="UTF-8">
<?php

/*  Edit these variable */

/*  Create array of your random items with their images */
$products = array("iPhone"=>"iphone.png", "iPad"=>"ipad.png", "Mac"=>"mac.png");
/*  Enter the URL of this page. */
$this_url= 'http://beta.spaceth.co/FunRandom';
/*  This is how many of the items will be random ** Don't have to modify **/
$product = array_rand($products, 1);

?>

<title>คุณจะได้ซื้อสินค้า Apple อะไรในปีนี้</title>
<meta property="og:title"  content="คุณจะได้ซื้อ <?php echo $product; ?>">
<meta property="og:description"content="คุณจะได้ซื้อ <?php echo $product; ?> แน่ ๆ ในปีนี้">
<link rel="stylesheet" href="css/style.css"></link>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=860554567349323";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<img class="do-not-display" src="<?php echo $this_url ?>/img/<?php echo $products[$product]; ?>"></img>

<h1>สุ่มสินค้า Apple ที่คุณอาจจะได้ซื้อในปีนี้</h1>
<p>มาลองเล่นกันดูว่าในปีนี้คุณมีโอกาสจะได้ซื้อสินค้า Apple ตัวไหน ถ้าอยากรู้ ลองแชร์หน้านี้ไปใน Facebook สิ แล้วสินค้าที่คุณมีโอกาสจะซื้อจะโชว์ขึ้นมา</p>
<br/><br/><br/>
<div class="fb-share-button" data-href="<?php echo $this_url ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

<div class="logo"></div>





</body>
</html>
