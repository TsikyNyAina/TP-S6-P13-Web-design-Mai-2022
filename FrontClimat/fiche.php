<!DOCTYPE html>

<?php

require("function.php");
if (isset($_GET['id'])) {
    $idActus = $_GET['id'];
    $slug = $_GET['slug'];
    $Actu = ficheActusSlug($idActus,$slug);
    $para = fichePara($idActus);
}

?>
<html data-wf-site="627e62315c1ea1a143fca889" class="w-mod-js wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-robotocondensed-n3-active wf-robotocondensed-n4-active wf-robotocondensed-n7-active wf-robotoslab-n3-active wf-robotoslab-n4-active wf-active">

<head>
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus{outline:none;}
    </style>
    <meta charset="utf-8">
    <title><?php echo $Actu['titre']; ?></title>
    <meta name="description" content="<?php echo $Actu['resume']; ?>">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="https://uploads-ssl.webflow.com/627e62315c1ea1a143fca889/css/rechauffement-climaatique.webflow.7ab50f5f7.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,regular,500%7CRoboto+Condensed:300,regular,700%7CRoboto+Slab:300,regular" media="all">
    <script type="text/javascript">
        WebFont.load({  google: {    families: ["Roboto:300,regular,500","Roboto Condensed:300,regular,700","Roboto Slab:300,regular"]  }});
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>
    <link href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon">
</head>

<body>
    <div class="all-content w-clearfix wf-section">
        <header class="main-column header">
            <h1 class="logo">Luttons contre le rechauffement Climatique</h1>
            <div class="big-tagline w-hidden-small w-hidden-tiny">
                Protegons<br>
                Notre<br>
                Planete.
            </div>
            <div class="info-wrapper">
                <div class="tagline"></div>
                <div class="byline"></div>
            </div>
            <div class="footer-wrapper w-clearfix">
                <a href="../index.php" class="footer-nav-link w-inline-block">
                    <img src="https://uploads-ssl.webflow.com/627e62315c1ea1a143fca889/627e62315c1ea1c841fca89d_home-icon.svg" alt="">
                </a>
                <a href="../index.php" class="footer-nav-link w-inline-block">
                    <img src="https://uploads-ssl.webflow.com/627e62315c1ea1a143fca889/627e62315c1ea12be5fca8a5_twitter-icon.svg" alt="">
                </a>
                <a href="../index.php" class="footer-nav-link w-inline-block">
                    <img src="https://uploads-ssl.webflow.com/627e62315c1ea1a143fca889/627e62315c1ea1c1c0fca8ab_facebook-icon.svg" alt="">
                </a>
                <a href="../index.php" class="footer-nav-link w-inline-block">
                    <div class="subscribe"></div>
                </a>
            </div>
        </header>
        <div class="main-column content">
            <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="w-nav">
                <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
            </div>
            <nav data-collapse="small" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="../index.php" class="nav-link w-nav-link">Articles</a>
                    
                </nav>
                <div class="menu-wrapper w-clearfix w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-1" aria-haspopup="menu" aria-expanded="false">
                    <div class="menu">MENU</div>
                    <div class="menu-icon w-icon-nav-menu"></div>
                </div>
                <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-1"></div>
            </nav>
            <div class="section wf-section">
                <h1><?php echo $Actu['titre']; ?></h1>
                <h2><?php echo $Actu['soustitre']; ?></h2>
                <p>
                    <?php echo $Actu['resume']; ?>
                </p>
            </div>
            <div class="section wf-section">
                <div class="w-row">
                    <?php for($i=0;$i<count($para);$i++){ ?>
                    <div class="row">

                        <h2><?php echo $para[$i]['titre']; ?></h2>
                        <p><?php echo $para[$i]['contenu']; ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=627e62315c1ea1a143fca889" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/627e62315c1ea1a143fca889/js/webflow.48cba697d.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>