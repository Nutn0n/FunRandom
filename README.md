# FunRandom
Random Meta OG for fun!

## How to Use 

- Clone this repository into your location with ```Git clone https://github.com/Nutn0n/FunRandom.git```
- Rename the folder into whatever you want. 
- Edit  index.php to make the file yours. 
- Test it on https://developers.facebook.com/tools/debug/ 

Now your game will works but Facebook still cache everything. You need to renew the Open Graph Object frequently (5-7 second will be the best for both performance and ux) 

- Go to the bottom of the debug page and go to "Scrape via API"
- Go to the bottom of the Scrape via API window and click "Get Code"
- Use cURL command to renew the Open Graph Object

When you run the command Facebook will renew the OG Debug but only once. You have to run the script in loop by using command ```watch -n 5 **your command here**``` to execute the command every 5 seconds. 

You may run this command on your own server and let the command keep running in the background using your favourite screening application. 

## 

Code by @Nutn0n - www.nutn0n.com 

