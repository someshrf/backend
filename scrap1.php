<!DOCTYPE html>
<html>

 <h1 id="header">Top Trending Videos On Youtube(Great Britain)</h1>

 <body>

<style>
  
 body{
    margin-top:10px;
 }
 
 .back
 {
  content: "";
   position: absolute;
   z-index: -1;
   background-image: url(http://is1.mzstatic.com/image/thumb/Purple127/v4/a8/13/49/a8134910-3f2f-2c4b-cd13-171e7559bbfd/source/175x175bb.jpg);
    background-size: 55%;
    background-repeat:no-repeat;
    background-position: center;
    opacity: 0.4;
    filter:alpha(opacity=40);
    height:90%;
    width:90%;
 }

 .display
   {opacity:1;
    filter:alpha(opacity=100);
    position:absolute;
    margin-left:390px;
    margin-top: 20px;
    width:44%;
    z-index:-1;

   }

  #header
  {margin-top:10px;
   margin-left:350px;
  }

</style>
  
 
<?php 
// Include the php dom parser    
include_once 'C:\wamp\www\simple_html_dom.php';

// Create DOM from URL or file

$html = file_get_html('https://www.youtube.com/feed/trending?gl=GB');

$videos = [];
//$arrays=array($video,$video,$video,$video,$video,$video,$video,$video,$video,$video) 

// Find top ten videos
$i = 1;
foreach ($html->find('li.expanded-shelf-content-item-wrapper') as $video) {
        if ($i > 10) {
                break;
        }
 
        // Find item link element 
        $videoDetails = $video->find('a.yt-uix-tile-link', 0);
 
        // get title attribute
        $videoTitle = $videoDetails->title;
 
        // get href attribute
        $videoUrl = 'https://youtube.com' . $videoDetails->href;
 
        // push to a list of videos
        $videos[] = [
                'title' => $videoTitle,
                'url' => $videoUrl
        ];
 
        $i++;
}
 ?>
 <div class="back"> 
 </div> 
 <div class="display">
  <?php 
  $i=0;
   while($i<10)
   {  
      echo ($i+1)."." ." "."Title: ".$videos[$i]['title']."<br>";
      //echo ' '.'url: '.$videos[$i]["url"].' <br><br>';
      echo ' '.' '.'URL: '.$videos[$i]["url"].'</a><br><br>';
    
    
    $i++;
    
    
 }
 ?>
 </div>
</body>
</html>
