<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
  <title><?=$APPLICATION->ShowTitle()?></title>
  <link rel="stylesheet" href="bitrix/templates/.default/template_styles.css"/>
  <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
  <script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
  <script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>

  <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
  <link rel="shortcut icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico">
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
  <div class="hd_header_area">
      <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/templates/.default/include/header.php') ?>
  </div>

    <!--- // end header area --->

    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "rest_entity",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>

  <!--- // end slider area --->

  <div class="main_container homepage">

      <!-- events -->
      <div class="ev_events">
          <div class="ev_h">
              <h3>Ближайшие события</h3>
              <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
          </div>
          <ul class="ev_lastevent">
              <li>
                  <h4><a href="">29 августа 2012, Москва</a></h4>
                  <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
              </li>
              <li>
                  <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                  <p> Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
              </li>
              <li>
                  <h4><a href="">31 августа 2012, Краснодар</a></h4>
                  <p> Открытие нового магазина в нашей дилерской сети.</p>
              </li>
          </ul>
          <div class="clearboth"></div>
      </div>
      <!-- // end events -->
      <div class="cn_hp_content">
          <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "product_categories_main",
            Array(
              "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
              "ADD_SECTIONS_CHAIN" => "Y",
              "CACHE_FILTER" => "N",
              "CACHE_GROUPS" => "Y",
              "CACHE_TIME" => "36000000",
              "CACHE_TYPE" => "A",
              "COMPONENT_TEMPLATE" => "product_categories_main",
              "COUNT_ELEMENTS" => "Y",
              "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
              "FILTER_NAME" => "sectionsFilter",
              "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
              "HIDE_SECTION_NAME" => "N",
              "IBLOCK_ID" => "2",
              "IBLOCK_TYPE" => "products",
              "SECTION_CODE" => "",
              "SECTION_FIELDS" => array(0=>"",1=>"",),
              "SECTION_ID" => $_REQUEST["SECTION_ID"],
              "SECTION_URL" => "",
              "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
              "SHOW_PARENT_NAME" => "Y",
              "TOP_DEPTH" => "2",
              "VIEW_MODE" => "TILE"
            )
          );?>
          <div class="cn_hp_post">
              <div class="cn_hp_post_new">
                  <h3><a href="">Новинки</a></h3>
                  <img src="/bitrix/templates/.default/content/5.png" alt=""/>
                  <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                  <div class="clearboth"></div>
              </div>
              <div class="cn_hp_post_action">
                  <h3><a href="">Акции</a></h3>
                  <img src="/bitrix/templates/.default/content/6.png" alt=""/>
                  <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                  <div class="clearboth"></div>
              </div>
              <div class="cn_hp_post_bestsellersn">
                  <h3><a href="">Хиты продаж</a></h3>
                  <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                  <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                  <div class="clearboth"></div>
              </div>
          </div>
          <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news-main",
            Array(
              "ACTIVE_DATE_FORMAT" => "j F Y",
              "ADD_SECTIONS_CHAIN" => "Y",
              "AJAX_MODE" => "N",
              "AJAX_OPTION_ADDITIONAL" => "",
              "AJAX_OPTION_HISTORY" => "N",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "Y",
              "CACHE_FILTER" => "N",
              "CACHE_GROUPS" => "Y",
              "CACHE_TIME" => "36000000",
              "CACHE_TYPE" => "A",
              "CHECK_DATES" => "Y",
              "COMPONENT_TEMPLATE" => "news-main",
              "DETAIL_URL" => "",
              "DISPLAY_BOTTOM_PAGER" => "N",
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "DISPLAY_TOP_PAGER" => "N",
              "FIELD_CODE" => array(0=>"",1=>"",),
              "FILTER_NAME" => "",
              "HIDE_LINK_WHEN_NO_DETAIL" => "N",
              "IBLOCK_ID" => "1",
              "IBLOCK_TYPE" => "news",
              "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
              "INCLUDE_SUBSECTIONS" => "Y",
              "MESSAGE_404" => "",
              "NEWS_COUNT" => "4",
              "PAGER_BASE_LINK_ENABLE" => "N",
              "PAGER_DESC_NUMBERING" => "N",
              "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
              "PAGER_SHOW_ALL" => "N",
              "PAGER_SHOW_ALWAYS" => "N",
              "PAGER_TEMPLATE" => ".default",
              "PAGER_TITLE" => "Новости",
              "PARENT_SECTION" => "",
              "PARENT_SECTION_CODE" => "",
              "PREVIEW_TRUNCATE_LEN" => "",
              "PROPERTY_CODE" => array(0=>"",1=>"",),
              "SET_BROWSER_TITLE" => "Y",
              "SET_LAST_MODIFIED" => "N",
              "SET_META_DESCRIPTION" => "Y",
              "SET_META_KEYWORDS" => "Y",
              "SET_STATUS_404" => "N",
              "SET_TITLE" => "Y",
              "SHOW_404" => "N",
              "SORT_BY1" => "ACTIVE_FROM",
              "SORT_BY2" => "SORT",
              "SORT_ORDER1" => "DESC",
              "SORT_ORDER2" => "ASC",
              "STRICT_SECTION_CHECK" => "N"
            )
          );?>
          <div class="clearboth"></div>
      </div>
  </div>
<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "reviews-main",
  Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "COMPONENT_TEMPLATE" => ".default",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(0=>"",1=>"",),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "6",
    "IBLOCK_TYPE" => "rest_entity",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "4",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(0=>"POSITION",1=>"COMPANY",2=>"",),
    "SET_BROWSER_TITLE" => "Y",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "Y",
    "SET_META_KEYWORDS" => "Y",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "Y",
    "SHOW_404" => "N",
    "SORT_BY1" => "rand",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N"
  )
);?>