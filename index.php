<html>
<meta charset="UTF-8">
<?php

/*  Edit these variable */

/*  STEP 1 :  Create json of your random items with their images */

$json = '
{
    "item": [
        {
          "name": "iPhone 7",
          "caption": "You will buy an iPhone" ,
          "img": "iphone7.png"
        },
        {
          "name": "iPad Pro",
          "caption": "You will buy an iPad" ,
          "img": "ipadpro.png"
        },
        {
          "name": "MacBook",
          "caption": "You will buy a MacBook" ,
          "img": "macbook.png"
        },
        {
          "name": "Apple TV",
          "caption": "You will buy Apple TV" ,
          "img": "tv.png"
        },
        {
          "name": "HomePod",
          "caption": "You will buy HomePod" ,
          "img": "hoempod.png"
        },
        {
          "name": "AirPods",
          "caption": "You will buy AirPods" ,
          "img": "airpods.png"
        }
    ]
}';



/*  STEP 2 : Enter the URL of this page. */
$this_url= 'http://beta.spaceth.co/FunRandom';


/*  STEP 3 : Enter how many item to random in rand(0,x)
      when x represent how many items to random **/

$random = rand(0,5);

/* STEP 4 : You're done! ** Do not edit code below this line */

$product = json_decode($json);

$product_name =  $product->item[$random]->name;
$product_caption =  $product->item[$random]->caption;
$product_img =  $product->item[$random]->img;

?>

<title>คุณจะได้ซื้อสินค้า Apple อะไรในปีนี้</title>
<meta property="og:title"  content="<?php echo $product_name ?>">
<meta property="og:description"content="<?php echo $product_caption; ?>">
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

<img class="do-not-display" src="<?php echo $this_url ?>img/<?php echo $product_img; ?>"></img>

<h1>สุ่มสินค้า Apple ที่คุณอาจจะได้ซื้อในปีนี้</h1>
<p>มาลองเล่นกันดูว่าในปีนี้คุณมีโอกาสจะได้ซื้อสินค้า Apple ตัวไหน ถ้าอยากรู้ ลองแชร์หน้านี้ไปใน Facebook สิ แล้วสินค้าที่คุณมีโอกาสจะซื้อจะโชว์ขึ้นมา</p>
<br/><br/><br/>
<div class="fb-share-button" data-href="<?php echo $this_url ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

<div class="logo"></div>


</body>
</html>
