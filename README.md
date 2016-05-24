# Шаблон для верстки сайта baza23.ru на bootstrap, адаптированный под 1C-Bitrix

## Глобальные константы находятся в файле /include/define.php.inc:

    <?
    define("SITE_TITLE", "Baza23");
    define("SITE_DIR", "/");
    define("SITE_TEMPLATE_PATH", "/");
    ?>

## Структура шаблона

.

├── css  
│   ├── bootstrap.min.css  
│   ├── font-awesome.min.css  
│   └── style.min.css  
├── favicon  
├── fonts  
├── images  
│   └── slide.png  
├── img  
│   └── logotype.png  
├── include  
│   ├── config.php.inc  
│   ├── define.php.inc  
│   ├── footer.php  
│   └── header.php  
├── js  
│   ├── bootstrap.min.js  
│   ├── ie9  
│   │   ├── html5shiv-printshiv.min.js  
│   │   ├── html5shiv.min.js  
│   │   └── respond.js  
│   ├── source  
│   │   └── script.js  
│   ├── jquery.min.js  
│   └── script.min.js  
├── less  
│   ├── bootstrap  
│   │   └── файлы less bootstrap  
│   ├── font-awesome.less  
│   ├── fonts.less  
│   ├── bootstrap.less  
│   ├── style.less  
│   └── variables.less  
├── index.php  
├── template.php  
└── typo.php  

##Подключение js файлов через CDN в файле /include/header.php:

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>js/script.min.js"></script>
     <!--[if lt IE 9]>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
    <![endif]-->

##Подключение js файлов без использования CDN в файле /include/header.php:

    <!-- jQuery -->
    <script src="<?=SITE_TEMPLATE_PATH?>js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?=SITE_TEMPLATE_PATH?>js/bootstrap.min.js"></script>
    <!-- User JavaScript -->
    <script src="<?=SITE_TEMPLATE_PATH?>js/script.min.js"></script>
    <!--[if lt IE 9]>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/html5shiv.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/html5shiv-printshiv.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/respond.js"></script>
    <![endif]-->
    
