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
    <a title="Меню" onclick="$('#menu').toggle();"><span class="span-bar"></span>
      <span class="span-bar"></span>
      <span class="span-bar"></span></a>
    <a href="/" title="Головна">Головна</a>
    <div id="menu">
      <ul>
        <li><a href="#resources" onclick="$('#menu').hide();">Ресурси</a></li>
        <li><a href="#music-braille" onclick="$('#menu').hide();">Нотні видання</a></li>
        <li><a href="#audio" onclick="$('#menu').hide();">Аудіокниги</a></li>
      </ul>
    </div>
  </div>
</div> <!--header -->
<div id="main"><h1>Вітаємо на ресурсному центрі для незрячих - Braille Ukraine</h1></div>
<div id="resources"><h2>Ресурси</h2></div>
<div id="music-braille"><h2>Нотні видання</h2></div>
<div id="audio"><h2>Аудіокниги</h2><br />
  <ul id="list-audio">
    <li>Книга 1</li>
    <li>Книга 2</li>
    <li>Книга 3</li>
    <li>Книга 4</li>
    <li>Книга 5</li>
    <li>Книга 6</li>
  </ul>
</div>
<?php 
echo '</body>';
