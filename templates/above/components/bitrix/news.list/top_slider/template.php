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

  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			   			  <?php foreach($arResult["ITEMS"] as $arItem): ?>

				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1><?=$arItem['NAME'];?></h1> 
				   		 		<h2><?=$arItem['PREVIEW_TEXT'];?></h2>
				   		 		</div>
				   		 </div>
					</article>
					 <?php endforeach; ?> 

				 </div>
				
            </div>
			
			
			
 <?php foreach($arResult["ITEMS"] as $arItem): ?>

