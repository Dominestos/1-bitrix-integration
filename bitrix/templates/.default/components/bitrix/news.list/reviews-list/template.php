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
<div class="review-list">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
      <div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="review-text">

          <div class="review-block-title"><span class="review-block-name"><?=$arItem["NAME"]?></span><span class="review-block-description"><?=$arItem['DISPLAY_PROPERTIES']['POSITION']['DISPLAY_VALUE']?> "<?=$arItem['DISPLAY_PROPERTIES']['COMPANY']['DISPLAY_VALUE']?>"</span></div>

          <div class="review-text-cont">
            <?=$arItem["DETAIL_TEXT"]?>
          </div>
        </div>
        <div class="review-img-wrap">
          <a href="#">
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
              <img
                class="preview_picture"
                border="0"
                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                style="float:left"
              />
            <?else:?>
              <img src="/images/nofoto.png" alt="img" width="50" height="50">
            <?endif;?>
          </a>
        </div>
      </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
      <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>
