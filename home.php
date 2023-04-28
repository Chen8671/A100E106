<?php include("index.php"); ?>
<!DOCTYPE html>
<html lang="zh-TW"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>遊戲人生情報網</title>
<meta name="keywords" content="版主,遊戲,動漫,本站,"><!--搜索關鍵字-->
<meta name="description" content="介紹有趣的動漫跟遊戲情報。">
<link href="static/css/index.css" rel="stylesheet" media="all"><!--與css關聯-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
<script type="text/javascript" src="./static/js/index.js"></script>
</head> 

<body>
  <div id="main">
    <div class="objectLeft">
      <button id="event" class="openbtn" onclick="openNav()">☰</button>
  </div>
<header>
  <h1>遊戲人生情報網</h1>
  <p class="A1">介紹有趣的動漫遊戲情報！</p>
</header>
<div class="sidebar" id="mySidebar" onclick="closeNav()">
  <a href="javascript:void(0)" onclick="closeNav()" class="closebtn"style="display:block;">x</a>
  <a href="#Home" onclick="closeNav()">關於本站</a>
  <a href="#videos" onclick="closeNav()">動漫情報</a>
  <a href="#game" onclick="closeNav()">遊戲情報</a>
  <a href="#me" onclick="closeNav()">版主介紹</a>
  <a href="./static/Subpage/improve.html" onclick="closeNav()">網站意見</a>
</div>
<nav>
  <ul class="menu">
    <li><a href="#Home">關於本站</a></li>
    <li><a href="#videos">動漫情報</a></li>
    <li><a href="#game">遊戲情報</a></li>
    <li><a href="#me">版主介紹</a></li>
  </ul>
</nav>

<main id="contents">

<section>
  <h2 id="Home">關於本站</h2>
  <p class="A1">歡迎光臨本網站這裡介紹很多有趣的遊戲跟動漫跟它們的背景故事</p><p>
</p></section>

<section>
  <h2>遊戲本站</h2>

  <section id="videos">
  <?php 
     if(is_array($posts)){ 
     foreach($posts as $row){ ?>
  <h3 class="h-sub">●<?php echo $row['title']??'';  ?><span>（Anime information・㊝）</span></h3>
<p><?php echo $row['content']??'';  ?></p>

    <img class="img-round imgLeft" src="./static/img/12121-p.jpg" width="500" height="500" alt="86不存在的戰區">
<?php }} ?>
    <iframe class="videoos"width="600" height="480" src="https://www.youtube.com/embed/QdxwFQBcxhk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p class="more"><a href="./static/Subpage/index86pg.html">→更多介紹</a></p>
  </section>
  <section id="game">
    <h3 class="h-sub">●遊戲情報<span>（Game information・㊝）</span></h3>
    <p>艾爾登法環</p>
    <p class="A2">《艾爾登法環》（日語：エルデンリング，英語：Elden Ring）是一款由FromSoftware開發，萬代南夢宮娛樂發行的魂系動作角色扮演遊戲。本作是由遊戲製作人宮崎英高與奇幻小說家喬治·R·R·馬丁共同創作。該遊戲擁有魂類遊戲特點高難度關卡、開放世界、無指引的探索、多重結局、多個職業等遊戲特點。</p>
    <img class="img-round imgLeft" src="./static/img/header.jpg" width="600" hright="500" alt="艾爾登法還">
    <iframe width="600" height="480" src="https://www.youtube.com/embed/V09lND2UlF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p class="more"><a href="https://eldenring.bn-ent.net/tc/">→更多介紹</a></p>
  </section>

</section>


<section id="me">
  <h2>版主介紹</h2>
  <img class="img-round imgLeft" src="./static/img/dog.jpg" width="300" height="200" alt="柴犬大頭貼">
  <dl>
    <dt>暱稱 ：</dt><dd>陳冠良</dd>
    <dt>職業 ：</dt><dd>崑山Html網頁學生</dd>
    <dt>mail ：</dt><dd>s110002817@g,ksu.edu.com.tw</dd>
    <dt>Web ：</dt><dd>https://a100e106lt.w3spaces.com</dd>
  </dl>
</section>

</main>

<footer>
  <p>Copyright ©遊戲人生情報網本站 All Rights Reserved.</p>
</footer>


</body></html>
