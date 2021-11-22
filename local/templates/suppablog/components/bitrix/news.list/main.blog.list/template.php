<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

$this->setFrameMode(true);
?>

<div id="blog-wrapper">
    <div class="blog-holder center-relative">
        <?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            $isFeaturedArticle = $key === 0;
            ?>

            <article id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="blog-item-holder<?= $isFeaturedArticle ? ' featured-post' : '' ?>">
                <div class="entry-content relative">
                    <?php if (!$isFeaturedArticle): ?>
                        <h2 class="entry-title">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem['NAME'] ?></a>
                        </h2>
                    <?php endif; ?>

                    <div class="cat-links">
                        <ul>
                            <li>
                                <a href=""><?=$arResult["SECTIONS"][$arItem["IBLOCK_SECTION_ID"]]["NAME"];?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="entry-date published"><?= $arItem['DATE_CREATE'] ?></div>

                    <?php if ($isFeaturedArticle): ?>
                        <h2 class="entry-title">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem['NAME'] ?></a>
                        </h2>

                        <div class="excerpt">
                            <?= $arItem['PREVIEW_TEXT'] ?>
                            <a class="read-more" href="<?= $arItem["DETAIL_PAGE_URL"] ?>"></a>
                        </div>
                    <?php endif; ?>

                    <div class="clear"></div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <div class="clear"></div>
</div>

<div class="featured-image-holder">
    <div class="featured-post-image">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            '',
            [
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH . "/include/header/featured-post-image.php",
                "EDIT_TEMPLATE" => ""
            ],
            false
        );
        ?>
    </div>
</div>

<div class="clear"></div>

