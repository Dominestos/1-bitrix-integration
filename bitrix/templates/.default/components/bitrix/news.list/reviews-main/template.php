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

<script type="text/javascript" >
  $(document).ready(function(){

    $("#foo").carouFredSel({
      items:2,
      prev:'#rwprev',
      next:'#rwnext',
      scroll:{
        items:1,
        duration:2000
      }
    });
  });
</script>
<div class="rw_reviewed">
  <div class="rw_slider">
    <h4><?=$arResult['NAME']?></h4>
    <ul id="foo">
      <?foreach($arResult["ITEMS"] as $arItem):?>
        <li>
          <div class="rw_message">
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
            <img
              class="preview_picture rw_avatar"
              src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
              width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
              height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
              alt=""
              title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
            />
            <?else:?>
              <img src="/images/nofoto.png" alt="img" width="50" height="50">
            <?endif;?>
            <span class="rw_name"><?=$arItem["NAME"]?></span>
            <span class="rw_job"><?=$arItem['DISPLAY_PROPERTIES']['POSITION']['DISPLAY_VALUE']?> "<?=$arItem['DISPLAY_PROPERTIES']['COMPANY']['DISPLAY_VALUE']?>"</span>
              <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <p>"<?=$arItem["PREVIEW_TEXT"]?>"</p>
              <?endif;?>
            <div class="clearboth"></div>
            <div class="rw_arrow"></div>
          </div>
        </li>
      <?endforeach;?>

    </ul>
    <div id="rwprev"></div>
    <div id="rwnext"></div>
    <a href="/company/otzyvy/" class="rw_allreviewed"><?=GetMessage("ALL_REVIEWS")?></a>
  </div>
</div>