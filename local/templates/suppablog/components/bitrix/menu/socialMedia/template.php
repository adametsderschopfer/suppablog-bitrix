<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!empty($arResult)): ?>
    <div class="social-holder">
        <div class="social-list">
            <?php foreach ($arResult as $arItem): ?>
                <a href="<?= $arItem["LINK"] ?>">
                    <i class="fa <?= $arItem["TEXT"] ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
<?php
endif;
