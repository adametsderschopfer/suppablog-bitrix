<?php

$arFilter = [
    "IBLOCK_ID" => 2
];
$db_list = CIBlockSection::GetList(
    [
        "NAME" => "ASC"
    ],
    $arFilter,
    false
);

while ($arr = $db_list->GetNext()) {
    $arResult["SECTIONS"][$arr["ID"]]["NAME"] = $arr["NAME"];
}