<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!empty($arResult)): ?>
    <nav id="header-main-menu">
        <ul class="main-menu sm sm-clean">
            <?php foreach ($arResult as $arItem): ?>
                <li>
                    <a
                            href="<?= $arItem["LINK"] ?>"
                        <?php if (($arItem["SELECTED"])): ?>
                            class="current"
                        <?php endif; ?>
                    >
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php
endif;
