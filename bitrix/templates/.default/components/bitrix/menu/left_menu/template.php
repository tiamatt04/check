<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="sb_sidebar">
<div class="sb_nav">
<ul>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["SELECTED"]):?>
<span class="sb_showchild"></span>
		<li ><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
	<?else:?>
		<li ><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
	<?endif?>

<?endforeach?>

</ul>
</div>
</div>
<?endif?>
<!--<div class="sb_sidebar">-->
<!--    <div class="sb_nav">-->
<!--        <ul>-->
<!--            <li class="close"><a href=""><span>Каталог</span></a></li>-->
<!--            <li class="close"><a href=""><span>Кухни</span></a></li>-->
<!--            <li class="close"><a href=""><span>Гарнитуры</span></a></li>-->
<!--            <li class="open current">-->
<!--                <span class="sb_showchild"></span>-->
<!--                <a href=""><span>Спальни</span></a>-->
<!--                <ul>-->
<!--                    <li><a href="">Одноместрые</a></li>-->
<!--                    <li><a href="">Двухместные</a></li>-->
<!--                    <li><a href="">Детские</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="close"><a href=""><span>Кухни</span></a></li>-->
<!--            <li class="close"><a href=""><span>Гарнитуры</span></a></li>-->
<!--            <li class="close">-->
<!--                <span class="sb_showchild"></span>-->
<!--                <a href=""><span>Спальни</span></a>-->
<!--                <ul>-->
<!--                    <li><a href="">Одноместрые</a></li>-->
<!--                    <li><a href="">Двухместные</a></li>-->
<!--                    <li><a href="">Детские</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<?//if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//if (!empty($arResult)):?>
<!--    <div class="side-block side-menu">-->
<!--        <div class="menu-block">-->
<!--            <ul>-->
<!--                --><?//
//                foreach($arResult as $arItem):
//                    if($arItem["DEPTH_LEVEL"] > 1)
//                        continue;
//                    ?>
<!--                    --><?//if($arItem["SELECTED"]):?>
<!--                    <li class="selected"><a href="--><?php //=$arItem["LINK"]?><!--">--><?php //=$arItem["TEXT"]?><!--</a></li>-->
<!--                --><?//else:?>
<!--                    <li><a href="--><?php //=$arItem["LINK"]?><!--">--><?php //=$arItem["TEXT"]?><!--</a></li>-->
<!--                --><?//endif?>
<!---->
<!--                --><?//endforeach?>
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<?//endif?>


