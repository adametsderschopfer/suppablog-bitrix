<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>

<div class="single-post-wrapper content-1070 center-relative">
    <article class="center-relative">
        <h1 class="entry-title">
            <?= $arResult['NAME'] ?>
        </h1>
        <div class="post-info content-660 center-relative">
            <div class="cat-links">
                <ul>
                    <?php foreach ($arResult['SECTION']['PATH'] as $arSection): ?>
                        <li><a href="#"><?= $arSection['NAME'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="entry-date published"><?= CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp('', CSite::GetDateFormat())); ?></div>
            <div class="clear"></div>
        </div>

        <div class="entry-content">
            <div class="content-wrap content-660 center-relative">
                <p><?= $arResult['PREVIEW_TEXT'] ?></p>
                <br>
                <div class="clear"></div>
            </div>
            <div class="post-full-width">
                <script>
                    var slider1_speed = "500";
                    var slider1_auto = "true";
                    var slider1_pagination = "true";
                    var slider1_hover = "true";
                </script>
                <div class="image-slider-wrapper">
                    <div class="caroufredsel_wrapper">
                        <ul id="slider1" class="image-slider slides center-text">
                            <li><img src="demo-images/01_blogpost_galery.jpg" alt=""></li>
                            <li><img src="demo-images/02_blogpost_galery.jpg" alt=""></li>
                            <li><img src="demo-images/03_blogpost_galery.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="slider1_pagination carousel_pagination left"></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content-wrap content-660 center-relative ">
                <?= htmlspecialchars($arResult['DETAIL_TEXT']) ?>
            </div>
        </div>
        <div class="clear"></div>
    </article>
</div>
