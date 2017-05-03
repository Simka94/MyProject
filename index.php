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
    <meta property="og:url" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$cur_og = ($_GET['lang'] == 'en') ? '/' : '/ru/'; ?>">
    <meta property="og:image" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/img/og_image.png'; ?>">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta property="fb:app_id" content="280649482385051"> 
    <meta property="og:description" content="<?php echo description; ?>">
    <meta property="og:site_name" content="Aleksandr Simak">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo title; ?>">
    <meta name="twitter:description" content="<?php echo description; ?>">
    <meta name="twitter:image" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/img/og_image.png'; ?>">
    <meta name="theme-color" content="#000000">
    <link rel="alternate" hreflang="<?php echo ($_GET['lang'] == 'en') ? 'ru' : 'en'; ?>" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$alt = ($_GET['lang'] == 'en') ? '/ru/' : '/'; ?>">
    <link rel="canonical" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/'; ?>"/>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="overflow_body">
<div itemscope class="itemscope" itemtype="http://schema.org/Person">
    <span itemprop="name"><?php echo my_name; ?></span>
    <img src="/img/simak.jpg" itemprop="image" alt="Photo of <?php echo my_name; ?>"/>
    <span itemprop="jobTitle"><?php echo job; ?></span>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="telephone">+38 063 726 76 89</span>
    <a href="mailto:simakalexandr94@gmail.com" itemprop="email">simakalexandr94@gmail.com</a>
    <a href="http://simka.esy.es/" itemprop="url">simka.esy.es</a>
    </div>  
</div>
    <div id="preloader">
        <div class="loared_container">
            <div class="loader"></div>
        </div> 
    </div>
    <div class="main_container">
        <div class="close_nav">
            <span class="top_close"></span>
            <span class="center_close"></span>
            <span class="bottom_close"></span>
        </div>
        <div class="navigation_container">
            <div class="navigation">
                <div class="logo">
                    <a class="nav_link" href="#main">
                        <svg><use xlink:href="#logo"></use></svg>
                    </a>
                </div>
                <div class="nav_menu">
                    <ul class="nav">
                        <li id="animator"></li>
                        <li class="active_anim">
                            <a class="nav_link" rel="nofollow" href="#main"><?php echo main; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" rel="nofollow" href="#about"><?php echo about; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" rel="nofollow" href="#portfolio"><?php echo works; ?></a>
                        </li>
                        <li>
                            <a class="nav_link" rel="nofollow" href="#contacts"><?php echo contacts; ?></a>
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
                <div class="main_text"><h1><?php echo main_text; ?></h1></div>
                <div class="mouse_container">
                    <a class="nav_link" rel="nofollow" href="#about">
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="about" class="about section_container">
                <div class="about_text">
                    <div class="coloumn about_cloumn">
                        <div class="svg_container">
                            <svg><use xlink:href="#user"></use></svg>
                        </div>
                        <div class="title_about"><?php echo about_me; ?></div>
                        <?php echo about_me_text; ?>
                    </div>
                    <div class="coloumn code_cloumn">
                        <div class="svg_container">
                            <svg><use xlink:href="#code"></use></svg>
                        </div>
                        <div class="title_about"><?php echo about_skills; ?></div>
                        <?php echo about_skills_text; ?>
                    </div>
                    <div class="coloumn star_cloumn">
                        <div class="svg_container">
                            <svg><use xlink:href="#star"></use></svg>
                        </div>
                        <div class="title_about"><?php echo about_desires; ?></div>
                        <?php echo about_desires_text; ?>
                    </div>
                </div>
            </div>
            <div id="portfolio" class="portfolio section_container">
                <video id="video" autoplay muted loop>
                    <source src="video/video.mp4" type="video/mp4">
                </video>
                <div class="work fbs">
                    <span class="anim_1"></span>
                    <span class="anim_2"></span>
                    <span class="anim_3"></span>
                    <span class="anim_4"></span>
                    <div class="work_overlay">
                        <div class="work_link">
                            <a href="https://fbs-tax.com/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="http://www.didiusdesign.com/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="http://smartschool.in.ua/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="https://golden-key-invest.com/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="http://rollowolf.com/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="http://sib.community/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="http://media-talks.say-hi.me/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="http://ubernet.com.ua/" rel="nofollow" target="_blank"><?php echo look; ?></a>
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
                            <a href="https://vinterior.com.ua/" rel="nofollow" target="_blank"><?php echo look; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contacts" class="contacts section_container">
                <div class="contacts_container">
                    <div id="g_map"></div>
                    <div class="form_container">
                        <div class="form_text">
                            <?php echo form_text; ?>
                        </div>
                        <div class="phone">
                            <a href="tel:+380637267689"><svg class="phone_icon"><use xlink:href="#phone"></use></svg>+38 063 726 76 89</a>
                        </div>
                        <div class="loader_form_container">
                            <div class="form_loader">
                                <div class="form_loared_container">
                                    <div class="loader_in"></div>
                                </div> 
                            </div>
                            <form class="contact_form">
                                <input id="valid_name" autocomplete="off" name="user_name" placeholder="<?php echo name; ?>" type="text">
                                <input id="valid_mail" autocomplete="off" name="user_email" placeholder="E-mail" type="text">
                                <button type="submit"><?php echo send; ?></button>
                            </form>
                            <div class="msg"></div>
                        </div>
                        <div class="socials">
                            <div class="soc_container">
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
                            <div class="download"><a href="/download/Resume_Aleksandr_Simak.doc" download><svg class="download_icon"><use xlink:href="#download"></use></svg><?php echo download; ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGSztsq2kf9XCZGarVXvP1Tq_hPsmImsQ"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src="/js/common.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
</body>
</html>