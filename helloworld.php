<?php
header('Content-Type: text/html; charset=utf-8');
echo "<!DOCTYPE html><html><head><title>Braille Ukraine - ресурсний центр для незрячих</title>";


?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<link rel="stylesheet" text="text/css" href="https://cdn.rawgit.com/n3cs1s/braille-ua/9fac3c41/css/styles.css" />
<link rel="stylesheet" text="text/css" href="https://rawgit.com/n3cs1s/braille-ua/master/css/styles.css" />
<?php
echo '</head><body><br />';
?>
<div id="header">
  <div id="topbar">
    <a title="Menu" onclick="$('#menu').toggle();"><span class="span-bar"></span>
      <span class="span-bar"></span>
      <span class="span-bar"></span></a>
    <div id="menu">
      <ul>
        <li><a href="#resources" onclick="$('#menu').hide();">Resources</a></li>
        <li><a href="#music-braille" onclick="$('#menu').hide();">Music files</a></li>
        <li><a href="#audio" onclick="$('#menu').hide();">Audio descriptions</a></li>
      </ul>
    </div>
  </div>
</div> <!--header -->
<div id="main"><h1>Вітаємо на ресурсному центрі для незрячих - Braille Ukraine</h1></div>
<div id="resources">Resources</div>
<div id="music-braille">Music Braille</div>
<div id="audio">Audio descriptions</div>
<?php 
echo '</body>';
