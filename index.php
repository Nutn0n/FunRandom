<html>
<meta charset="UTF-8">
<?php

/*  Edit these variable */

/*  Create array of your random items with their images */
$products = array(
  "AirPods"=>"airpods.png",
  "AirPort"=>"airport.png",
  "Apple Pencil"=>"applepencil.png",
  "Apple Watch"=>"applewatch.png",
  "Apple Watch Edition"=>"applewatchedition.png",
  "Apple Watch Nike"=>"applewatchnike.png",
  "iPhone Battary Case"=>"battarycase.png",
  "iPhone Dock"=>"dock.png",
  "HomePod"=>"homepod.png",
  "iMac"=>"imac.png",
  "iMac Pro"=>"imacpro.png",
  "iPad Pro"=>"ipadpro.png",
  "iPhone 7"=>"iphone7.png",
  "iPhone SE"=>"iphonese.png",
  "MacBook"=>"macbook.png",
  "MacBook Air"=>"macbookair.png",
  "MacBook Pro"=>"macbookpro.png",
  "Mac Pro"=>"macpro.png",
  "Mac mini"=>"macmini.png",
  "Magic Mouse"=>"magicmouse.png",
  "Apple TV"=>"tv.png",
"");


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

<?php
	class FacebookDebugger
	{
		/*
		 * https://developers.facebook.com/docs/opengraph/using-objects
		 *
		 * Updating Objects
		 *
		 * When an action is published, or a Like button pointing to the object clicked,
		 * Facebook will 'scrape' the HTML page of the object and read the meta tags.
		 * The object scrape also occurs when:
		 *
		 *      - Every 7 days after the first scrape
		 *
		 *      - The object URL is input in the Object Debugger
		 *           http://developers.facebook.com/tools/debug
		 *
		 *      - When an app triggers a scrape using an API endpoint
		 *           This Graph API endpoint is simply a call to:
		 *
		 *           POST /?id={object-instance-id or object-url}&scrape=true
		 */
		public function reload($url)
		{
			$graph = 'https://graph.facebook.com/';
			$post = 'id='.urlencode($url).'&scrape=true';
			return $this->send_post($graph, $post);
		}
		private function send_post($url, $post)
		{
			$r = curl_init();
			curl_setopt($r, CURLOPT_URL, $url);
			curl_setopt($r, CURLOPT_POST, 1);
			curl_setopt($r, CURLOPT_POSTFIELDS, $post);
			curl_setopt($r, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($r, CURLOPT_CONNECTTIMEOUT, 5);
			$data = curl_exec($r);
			curl_close($r);
			return $data;
		}
	}
?>

<?php
	$fb = new FacebookDebugger();
	$fb->reload($this_url);
?>

</body>
</html>
