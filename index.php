<!DOCTYPE html>
<html lang="<?php echo $_GET['lang']; ?>">
<head>
    <meta charset="utf-8">
    <title>Aleksandr Simak - Frontend Developer</title>
    <meta name="description" content="Front-end Developer producing high quality responsive websites.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Aleksandr Simak - Frontend Developer">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'; ?>">
    <meta property="og:image" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/img/og_image.png'; ?>">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta property="fb:app_id" content="280649482385051"> 
    <meta property="og:description" content="Front-end Developer producing high quality responsive websites.">
    <link rel="alternate" hreflang="<?php echo ($_GET['lang'] == 'en') ? 'ru' : 'en'; ?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$alt = ($_GET['lang'] == 'en') ? '/' : '/en/'; ?>">
    <link rel="canonical" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'; ?>"/>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-96899264-1', 'auto');
  ga('send', 'pageview');
</script>  
<?php 
    if($_GET['lang'] == 'en'){
        include_once 'langs/lang_en.php'; 
    }else{
        include_once 'langs/lang_ru.php';
    };
?>
    <div class="preloader">
        <div class="loared_container">
            <div class="loader"></div>
        </div> 
    </div>
    <div class="main_container">
        <div class="navigation_container">
            <div class="navigation">
                <div class="logo">
                    <img src="/img/logo.svg" alt="">
                </div>
                <div class="nav_menu">
                    <ul class="nav">
                        <div id="animator"></div>
                        <li class="active_anim">
                            <a class="nav_link" href="#main"><?php echo main; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" href="#about"><?php echo about; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" href="#skills"><?php echo skills; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" href="#portfolio"><?php echo works; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" href="#contacts"><?php echo contacts; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <div class="lang"><?php echo href_en; ?></div>
                    <div class="lang"><?php echo href_ru; ?></div>
                </div>
            </div>
        </div>
        <div class="section">
            <div id="main" class="main section_container">
                <div class="main_text"></div>
            </div>
            <div id="about" class="about section_container">
                Hello
            </div>
            <div id="skills" class="skills section_container">
                Hello
            </div>
            <div id="portfolio" class="portfolio section_container">
                <div class="work fbs">
                </div>
                <div class="work didius">
                </div>
                <div class="work school">
                </div>
                <div class="work rollo">
                </div>
                <div class="work sayhi">
                </div>
                <div class="work ubernet">
                </div>
                <div class="work vienterir">
                </div>
                <div class="work gk">
                </div>
                <div class="work sib">
                </div>
            </div>
            <div id="contacts" class="contacts section_container">
                <div class="form_container">
                    <form class="contact_form" action="">
                        <input placeholder="Name" type="text">
                        <input placeholder="E-mail" type="text">
                        <input type="text">
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div> 
    </div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>