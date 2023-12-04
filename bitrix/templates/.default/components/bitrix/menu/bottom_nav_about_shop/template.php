<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var CBitrixComponentTemplate $this
 * @var CBitrixMenuComponent $component
 * @var array $arParams
 * @var array $arResult
 */

if (!empty($arResult))
{
	?>
  <ul>
      <?php
      foreach ($arResult as $item)
      {
          if ($arParams['MAX_LEVEL'] === 1 && $item['DEPTH_LEVEL'] > 1)
          {
              continue;
          }

          ?>
        <li>
          <a href="<?=$item['LINK']?>" class="store-menu-item-link"><?=$item['TEXT']?></a>
        </li>
          <?php
      }
      ?>
  </ul>
	<?php
}