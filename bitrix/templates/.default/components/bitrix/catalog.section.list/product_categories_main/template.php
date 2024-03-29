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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="cn_hp_category">
  <ul>
      <?php
      $i = 0;
      foreach($arResult['SECTIONS'] as $arSection):?>
        <?if ($i < 4):?>
        <li>
          <img src="<?=$arSection['PICTURE']['SRC']?>" alt="Pic"/>
          <h2><a href="<?=$arSection['SECTION_PAGE_URL']?>"><?=$arSection['NAME']?></a></h2>
          <p><?=$arSection['DESCRIPTION']?> <a class="cn_hp_categorymore" href="<?=$arSection['SECTION_PAGE_URL']?>">&rarr;</a></p>
          <div class="clearboth"></div>
        </li>
        <?php
        $i++;
        endif;?>
      <?endforeach;?>
  </ul>
  <a href="<?=$arResult['SECTIONS'][0]['LIST_PAGE_URL']?>" class="cn_hp_category_more"><?=GetMessage("ALL_CATEGORIES")?> &rarr;</a>
</div>

