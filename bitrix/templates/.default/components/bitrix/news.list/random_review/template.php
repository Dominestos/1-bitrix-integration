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

<div class="sb_reviewed">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
          <img
            class="preview_picture sb_rw_avatar"
            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
          />
        <?else:?>
          <img src="/images/nofoto.png" alt="img" width="50" height="50">
        <?endif;?>
  <span class="sb_rw_name"><?=$arItem["NAME"]?></span>
  <span class="sb_rw_job"><?=$arItem['DISPLAY_PROPERTIES']['POSITION']['DISPLAY_VALUE']?> "<?=$arItem['DISPLAY_PROPERTIES']['COMPANY']['DISPLAY_VALUE']?>"</span>

  <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
    <p>"<?=$arItem["PREVIEW_TEXT"]?>"</p>
  <?endif;?>
  <div class="clearboth"></div>
  <div class="sb_rw_arrow"></div>
  <?endforeach;?>
</div>