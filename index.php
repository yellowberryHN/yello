<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffff00">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffff00">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="https://yello.ooo/res/icon-32.png">
        <title>yello.ooo — your local hellhole</title>
    </head>
    <body>
      <h1><a href="https://yello.ooo">yello.ooo</a> — zsolt zitting's website</h1>
      <h2>it's like a trash compactor for your soul.</h2>
      <a href="https://asciimator.net" onclick="alert('unfortunately, all good things must come to an end.\n\nrip asciimator');return false;">
      <tt>&nbsp;,&nbsp;</tt><br>
      <tt>&nbsp;9/</tt><br>
      <tt>/Y&nbsp;</tt><br>
      <tt>/&nbsp;\</tt><br>
      </a>
      <br>
      <p>hey there. thanks for visiting this site, i guess. i am a programmer from hungary living in southern california
          and i do a bunch of stuff. see my <a href="resume.html">resume</a> for more details. i think everything else
          here will be kinda boring, so that sucks.</p>
      <p>i'm not good at programming. if anyone tells you otherwise, they think far too highly of me.</p>
      <h3>where i exist</h3>
      <ul>
          <?php include("inc/contact.html");?>
      </ul>
      <h3>my projects</h3>
      <ul>
          <li><a href="https://harpnet.io">harpnet</a> — my software company</li>
          <li><a href="https://harpnetstudios.com">harpnet studios</a> — the game development branch of harpnet</li>
          <li><a href="https://harpnetstudios.com/games/carmine">carmine impact</a> — a game i've been making for a while</li>
          <li><a href="https://github.com/openlsr">openlsr</a> — a collection of projects to bring lego stunt rally back to life</li>
          <li><a href="https://yellowberry.bandcamp.com">yellotunes</a> — the music that i produce</li>
          <li><a href="https://github.com/yellowberryhn/enginedetect">enginedetect</a> — a cool python script to detect game engines</li>
          <li><a href="/projects">... and many, many more.</a> i have too many projects.
      </ul>
      <p>i will eventually put more stuff here, but for now this is all i will write.</p>
      <h5>full source available on <a href="https://github.com/yellowberryhn/yello">github</a> (when i remember to update it)</br>
      <?php
      
      if (filemtime(__FILE__) < filemtime("inc/contact.html")) {
        $time = filemtime("inc/contact.html");
      } else {
        $time = filemtime(__FILE__);
      }
      
      echo "last modified: ".strtolower(date("F d, Y H:i:s",$time))." utc";
      ?>
      </h5>
    </body>
</html>
