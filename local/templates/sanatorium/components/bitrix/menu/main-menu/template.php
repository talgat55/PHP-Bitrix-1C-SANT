<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="bottom  ">
    <div class="row  ">
        <? if (!empty($arResult)): ?>
            <nav id="main-navigation" class="col-md-10  col-xs-12">


                <ul class="center-menu  d-flex">

                    <?
                    foreach ($arResult as $arItem):
                        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                            continue;
                        ?>
                        <? if ($arItem["SELECTED"]): ?>
                        <li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
                    <? else: ?>
                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                    <? endif ?>

                    <? endforeach ?>

                </ul>
            </nav>
        <? endif ?>
        <div id="buy-ticket" class="col-md-2 col-xs-12">
            <a href="#">
                Купить путевку
            </a>
        </div>
    </div>
</div>