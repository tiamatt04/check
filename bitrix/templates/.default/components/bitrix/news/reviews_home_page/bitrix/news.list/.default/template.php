<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<script type="text/javascript">    $(document).ready(function () {
        $("#foo").carouFredSel({
            items: 2, prev: '#rwprev',
            next: '#rwnext', scroll: {
                items: 1, duration: 2000
            }
        });
    });</script>
<div class="rw_reviewed">
    <div class="rw_slider"><h4>Отзывы</h4>
        <ul id="foo">                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <li>
                    <div class="rw_message">
                        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"  class="rw_avatar" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"/> </a>
                        <?endif; ?>
                        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                        <span class="rw_name"><?echo $arItem["NAME"]?></span>
                        		<? endif;?>
                 <? foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                     <span class="rw_job"><?=$arProperty["DISPLAY_VALUE"];?></span>
                        <?endforeach;?>
                        <? if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">  <p> <?echo $arItem["PREVIEW_TEXT"];?></p></a>
                        		<?endif;?>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
            <? endforeach; ?>            </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="http://ametovabitrix.ametovv4.beget.tech/site_ur/company/reviews/index.php" class="rw_allreviewed">Все отзывы</a></div>
</div>

