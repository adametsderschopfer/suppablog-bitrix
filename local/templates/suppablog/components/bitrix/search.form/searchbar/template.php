<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);
?>

<form class="search-holder" action="<?= $arResult["FORM_ACTION"] ?>">
    <label>
        <input
                type="search"
                class="search-field"
                name="q"
                placeholder="<?= Loc::GetMessage("SEARCH_INPUT_PLACEHOLDER"); ?>"
                title="<?= Loc::GetMessage("SEARCH_INPUT_TITLE"); ?>"
        >
        <input name="s" type="hidden" value="<?= Loc::GetMessage("BSF_T_SEARCH_BUTTON"); ?>"/>
    </label>
</form>
