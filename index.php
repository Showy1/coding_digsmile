<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DIGSMILE</title>

  <link rel="stylesheet" href="reset.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="main.js">

  </script>
</head>
<body>
  <header>
    <img src="img/site-logo.png" alt="digsmile" id="logo">
    <div id="hamburger" class="show">
      <div id="hamburger-icon">
        <div class="bar" id="hamburger-icon-top"></div>
        <div class="bar" id="hamburger-icon-middle"></div>
        <div class="bar" id="hamburger-icon-bottom"></div>
      </div>
      <div id="menu">MENU</div>
    </div>
    <div id="nav-mask" class="">
      <nav>
        <ul id="nav-list">
          <li id="d"><img src="img/logo-d.png" alt="digsmile"></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">WORKS</a></li>
          <li><a href="#">CULTURE</a></li>
          <li><a href="#">TOPICS</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="mv">
      <div class="mv-content">
        <img src="img/kv-img.png" alt="mv" id="mv-img">
        <div class="mv-content-text">
          <p id="mv-text1">デザインで人を笑顔にする会社</p>
          <p id="mv-text2">DIGSMILE INC.</p>
          <h1>DESIGN<br>FOR<br>SMILE.</h1>
        </div>
      </div>
      <div id="rect"></div>
    </section>

    <section class="about">
      <img src="img/about-img.png" alt="about" id="about-img">
      <div class="about-content">
        <h2>ABOUT US</h2>
        <p>DIGSMILEは、デザインで人を笑顔にする会社。<br>なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。<br>DIGSMILEの社名にはそんな想いが込められています。</p>
        <a href="#" class="more">READ MORE</a>
      </div>
    </section>

    <div class="container">
      <div class="wrapper-works-culture">
        <section class="works">
          <h2>WORKS</h2>
          <img src="img/works-img.png" alt="works">
          <p>DIGSMILEの制作実績を紹介します。</p>
          <a href="#" class="more">READ MORE</a>
        </section>

        <section class="culture">
          <h2>CULTURE</h2>
          <img src="img/culture-img.png" alt="culture">
          <p>DIGSMILEの社内文化について紹介します。</p>
          <a href="#" class="more">READ MORE</a>
        </section>
      </div>

      <section class="topics">
        <h2>LATEST TOPICS</h2>
        <ul class="topics-list">
          <li><time>2020.02.01</time><a href="#">イベントレポート「VRクリエイター座談会 〜5Gの次に来るもの〜」</a></li>
          <li><time>2020.01.18</time><a href="#">プレスリリースのお知らせ DIGGIN’ RECORDS</a></li>
          <li><time>2020.01.01</time><a href="#">新年明けましておめでとうございます</a></li>
        </ul>
        <a href="#" class="more">READ MORE</a>
      </section>

      <section class="contact">
        <img src="img/recruit-img.png" alt="recruit" id="contact-img">
        <div class="contact-content">
          <h2>CONTACT</h2>
          <p>制作の依頼、取材の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。<br>まずはお気軽にご連絡ください。担当者から改めて返信いたします。</p>
          <a href="#" class="more">READ MORE</a>
        </div>
      </section>
    </div>
  </main>
  <footer>
    <p>&copy;2018 DIGSMILE INC.</p>
  </footer>
</body>
</html>
