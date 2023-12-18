<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffff00">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffff00">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="https://yello.ooo/res/icon-32.png">
        <title>yello.ooo — your local hellhole</title>
    </head>
    <body>
      <h1><a href="https://yello.ooo">yello.ooo</a> — zsolt zitting's website</h1>
      <h2>it's like a trash compactor for your soul.</h2>
      <a href="https://asciimator.net"><tt>&nbsp;,&nbsp;</tt><br>
      <tt>&nbsp;9/</tt><br>
      <tt>/Y&nbsp;</tt><br>
      <tt>/&nbsp;\</tt><br></a>
      <br>
      <p>hey there. thanks for visiting this site, i guess. i am a programmer living in the wonderful state of utah
          and i also do other shit. see my <a href="resume.php">resume</a> for more details. i'm sure everything else
          will be kinda boring, so that sucks.</p>
      <h3>where i exist</h3>
      <ul>
          <?php include("inc/contact.html");?>
      </ul>
      <h3>my projects</h3>
      <ul>
          <li><a href="https://harpnetstudios.com">harpnet studios</a> — my game company</li>
          <li><a href="http://ddddwasd.gq">ddddwasd</a> — file dropper</li>
          <li><a href="https://yello.ooo/blog/">yello|blog</a> — my blog, obviously</li>
          <li><a href="https://yello.ooo/music">yellotunes</a> — the music that i write</li>
      </ul>
      <p>i will eventually put more stuff here, but for now this is all i will write.</p>
      <h5>full source available on <a href="https://github.com/realtinymonster/yello">github</a></br>
      <?php
      
      if (filemtime(__FILE__) < filemtime("inc/contact.html")) {
        $time = filemtime("inc/contact.html");
      } else {
        $time = filemtime(__FILE__);
      }
      
      echo "last modified: ".date("F d, Y H:i:s",$time)." UTC"; 
      ?>
      </h5>
    </body>
</html>
