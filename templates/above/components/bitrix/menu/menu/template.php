<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?if (empty($arResult['ALL_ITEMS'])) die;
?>
	   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
				<? foreach($arResult['ALL_ITEMS'] as $arItem): ?>
				   <?if ($arItem['SELECTED']): ?>
			 	<nav class="cl-effect-5">
						<li><a class="active" href="<?=$arItem['LINK'];?>"><span data-hover="Home"><?=$arItem['TEXT'];?></span></a></li>
					<? else: ?>
						<li><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></li>
					<? endif; ?>
				<?endforeach; ?>
				</nav>
			 </ul>
			 </div>