<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

  <?php if(is_array($arResult["DETAIL_PICTURE"])):?>
  <img
    class="detail_picture"
    align="left"
    src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
    width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
    height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
    alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
    title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
  />
  <?php endif;?>
    <?=$arResult["DETAIL_TEXT"]?>

