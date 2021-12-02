<!DOCTYPE html> 
<html> 
<head>
 <meta charset="UTF-8"> 
    <title><?php echo $_REQUEST["c"]; ?> | LiveTV</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WK6VRPBHEH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WK6VRPBHEH');
</script>   

 <script src="https://cdn.radiantmediatechs.com/rmp/6.6.5/js/rmp.min.js"></script> 
<script src="https://cdn.radiantmediatechs.com/rmp/5.10.2/js/rmp.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>

.nt{
    height:93%;
    width:23%;
    border-radius:2px;
    top:0;
}
.cen{
position:relative ;
color:white;
width:100%;
height:75px;
top:1%;
left:4px;

}
.centered{
font-size:16px;
font-weight:normal;
    position:absolute ;
    top:-22px;
    left:27%;
    padding:0;
    }
    .cent{
font-size:14.5px;
font-weight:normal ;
    position:absolute ;
    top:9px;
    left:27%;
    padding:0;
    }
.dot {
  height: 9px;
  width: 9px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
  left:27%;
}
.op{
   position:absolute ;
    top:-1px;
    left:90%;
    padding:0; 
}
.opj{
   position:absolute ;
    top:38px;
    left:90%;
    padding:0; 
}

html,body{
margin:0;
background-color:rgb(20,20,21);
}

</style>
  </head> <body> 
   
            <div id="rmpPlayer"></div>
  
   
    <script>

var src = {
        mp4 : [ '<?php echo $_REQUEST["c"]; ?>' ]
      };

var settings = {
  licenseKey: 'eWZmZ2d2Y3BrdEAxNTMwNjA2',

src: src,
ads: true,
adParser: 'rmp-vast',
adTagUrl:'https://vast.yomeno.xyz/vast?spot_id=21305' ,
skin: 's4',
scaleMode: 'stretch',
posterScaleMode: 'stretch',
automaticFullscreenOnLandscape: true,
contentMetadata: {
      poster: ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyNy3tw-X5GoM2hSftS55Z77G16L2qY8hntg&usqp=CAU']
    }
};
     
       
      var elementID = 'rmpPlayer'; 
    
      var rmp = new RadiantMP(elementID); 
     
      rmp.init(settings); 
</script>
<div class="cen">
        <img class="nt" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyNy3tw-X5GoM2hSftS55Z77G16L2qY8hntg&usqp=CAU">
<h5 class="centered">Server 1</h5>
<h5 class="cent"><span class="dot"></span>  Watching on NTTV </h5>
<a href="http://action_share"><i class="fa fa-share-alt op" style="font-size:30px;color:rgb(40,230,40);"></i></a>
<a href="http://action_share"><i class="fa fa-whatsapp opj" style="font-size:32px;color:rgb(40,230,40);"></i></a>
  </div>


</body>
 </html>
