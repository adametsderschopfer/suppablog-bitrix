<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

global $APPLICATION;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/clear.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/common.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/font-awesome.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/carouFredSel.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/sm-clean.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/style.css');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/imagesloaded.pkgd.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.nicescroll.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.smartmenus.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.carouFredSel-6.0.0-packed.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.mousewheel.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.touchSwipe.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.easing.1.3.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/main.js');

Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>");
Asset::getInstance()->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/layout/images/favicon.png" />');

Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
Asset::getInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
?>

<!DOCTYPE HTML>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body class="home blog <?php $APPLICATION->ShowProperty('BODY_ADDITIONAL_CLASS') ?>">

<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

<!-- Preloader Gif -->
<table class="doc-loader">
    <tbody>
    <tr>
        <td>
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/images/ajax-document-loader.gif" alt="Loading...">
        </td>
    </tr>
    </tbody>
</table>

<!-- Left Sidebar -->
<div id="sidebar" class="sidebar">
    <div class="menu-left-part">
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "searchbar",
            [
                "PAGE" => "#SITE_DIR#search/index.php",
                "USE_SUGGEST" => "N",
            ],
            false
        );
        ?>

        <div class="site-info-holder">
            <h1 class="site-title">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/sitetitle.php",
                        "EDIT_TEMPLATE" => ""
                    ],
                    false
                );
                ?>
            </h1>
            <p class="site-description">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/sitedescription.php",
                        "EDIT_TEMPLATE" => ""
                    ],
                    false
                );
                ?>
            </p>
        </div>

        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "main",
            [
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "main",
            ],
            false
        );
        ?>

        <footer>
            <div class="footer-info">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/info.php",
                        "EDIT_TEMPLATE" => ""
                    ],
                    false
                );
                ?>
            </div>
        </footer>
    </div>

    <div class="menu-right-part">
        <div class="logo-holder">
            <a href="/">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/common/logo.php",
                        "EDIT_TEMPLATE" => ""
                    ],
                    false
                )
                ?>
            </a>
        </div>

        <div class="toggle-holder">
            <div id="toggle">
                <div class="menu-line"></div>
            </div>
        </div>

        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "socialMedia",
            [
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "socialMedia",
            ],
            false
        );
        ?>

        <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
    </div>
    <div class="clear"></div>
</div>

<!-- Content -->
<div id="content" class="site-content <?php $APPLICATION->ShowProperty('CONTENT_ADDITIONAL_CLASSNAME'); ?>">
