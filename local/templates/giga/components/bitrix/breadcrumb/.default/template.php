<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(empty($arResult)) return "";

$strReturn = '';
$itemSize = count($arResult);

for($index = 0; $index < $itemSize; $index++)
{
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $link = $arResult[$index]["LINK"];


    if($arResult[$index]["LINK"] != "" && $index != $itemSize-1)
    {
        $strReturn .= '<a href="'.$link.'" class="breadcrumbs__item">'.$title.'</a>';
        $strReturn .= '<span class="breadcrumbs__separator"> &nbsp; </span>';
    }
    else
    {
        $strReturn .= '<div class="breadcrumbs__item">'.$title.'</div>';
    }
}

return $strReturn;


