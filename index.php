<!DOCTYPE html>
<html lang="<?php echo $_GET['lang']; ?>">
<?php 
    if($_GET['lang'] == 'en'){
        include_once 'langs/lang_en.php'; 
    }else{
        include_once 'langs/lang_ru.php';
    };
?>
<head>
    <meta charset="utf-8">
    <title><?php echo title; ?></title>
    <meta name="description" content="<?php echo description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?php echo title; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$cur_og = ($_GET['lang'] == 'en') ? '/' : '/ru/'; ?>">
    <meta property="og:image" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/img/og_image.png'; ?>">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta property="fb:app_id" content="280649482385051"> 
    <meta property="og:description" content="<?php echo description; ?>">
    <meta property="og:site_name" content="Aleksandr Simak">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo title; ?>">
    <meta name="twitter:description" content="<?php echo description; ?>">
    <meta name="twitter:image" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/img/og_image.png'; ?>">
    <link rel="alternate" hreflang="<?php echo ($_GET['lang'] == 'en') ? 'ru' : 'en'; ?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$alt = ($_GET['lang'] == 'en') ? '/ru/' : '/'; ?>">
    <link rel="canonical" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'; ?>"/>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>  
    <div class="preloader">
        <div class="loared_container">
            <div class="loader"></div>
        </div> 
    </div>
    <div class="main_container">
        <div class="navigation_container">
            <div class="navigation">
                <div class="logo">
                    <a class="nav_link" href="#main">
                        <svg><use xlink:href="#logo"></use></svg>
                    </a>
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
                <video id="video" autoplay loop>
                    <source src="/video/video.mp4" type="video/mp4">
                </video>
                <div class="main_text">Меня зовут Саша и я Frontend Developer </div>
                <div class="mouse_container">
                    <a class="nav_link" href="#about">
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="about" class="about section_container">
                <div class="about_text">asdasdasdasd</div>
            </div>
            <div id="skills" class="skills section_container">
                <div class="skills_text">asdasdasdasd</div>
            </div>
            <div id="portfolio" class="portfolio section_container">
                <div class="work fbs">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="https://fbs-tax.com/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work didius">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span> 
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="http://www.didiusdesign.com/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work school">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="http://smartschool.in.ua/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work rollo">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="http://rollowolf.com/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work sayhi">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="http://media-talks.say-hi.me/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work ubernet">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="http://ubernet.com.ua/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work vienterir">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="https://vinterior.com.ua/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work gk">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="https://golden-key-invest.com/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
                <div class="work sib">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="http://sib.community/" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contacts" class="contacts section_container">
                <div class="contacts_container">
                    <div id="g_map"></div>
                    <div class="form_container">
                        <div class="form_text">
                            Вы мне можете позвонить по номеру 0937267689 или...
                        </div>
                        <form class="contact_form">
                            <input name="user_name" placeholder="Name" type="text">
                            <input name="user_email" placeholder="E-mail" type="text">
                            <button type="submit">Send</button>
                        </form>
                        <div class="socials">
                            <a href="https://vk.com/id44597478" target="_blank">
                                <svg class="social_vk"><use xlink:href="#fb"></use></svg>
                            </a>
                            <a href="https://www.linkedin.com/in/simakalexandr/" target="_blank">
                                <svg class="social_skype"><use xlink:href="#linin"></use></svg>
                            </a>
                            <a href="skype:simaksasha1?chat">
                                <svg class="social_skype"><use xlink:href="#skype"></use></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGSztsq2kf9XCZGarVXvP1Tq_hPsmImsQ"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script async src="js/js.js"></script>
</body>
</html>