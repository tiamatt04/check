<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
IncludeTemplateLangFile(__FILE__);
?>
<div class="hd_header">
    <table>
        <tr>
            <td rowspan="2" class="hd_companyname">
                <h1>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/site_ur/include/logo.php"
                        )
                    );?></h1>
            </td>
            <td rowspan="2" class="hd_txarea">
                        <span class="tel"> <?php $APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/site_ur/include/phone.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?></span>	<br/>
                <?=GetMessage('WORKING_TIME') ?>  <span class="workhours">ежедневно с 9-00 до 18-00</span>
            </td>
            <td style="width:232px">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "head",
                    Array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N"
                    )
                );?><br>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 13px;">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "auth",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "FORGOT_PASSWORD_URL" => "/site_ur/user/",
                        "PROFILE_URL" => "/site_ur/user/profile.php",
                        "REGISTER_URL" => "/site_ur/user/registration.php",
                        "SHOW_ERRORS" => "Y"
                    )
                );?>
<!--							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>-->
<!--							<div class="hd_loginform">-->
<!--								<span class="hd_title_loginform">Войти на сайт</span>-->
<!--								<form name="" method="" action="">-->
<!---->
<!--									<input placeholder="Логин"  type="text">-->
<!--									<input  placeholder="Пароль"  type="password">-->
<!--									<a href="/" class="hd_forgotpassword">Забыли пароль</a>-->
<!---->
<!--									<div class="head_remember_me" style="margin-top: 10px">-->
<!--										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">-->
<!--										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>-->
<!--									</div>-->
<!--									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">-->
<!--									</form>-->
<!--								<span class="hd_close_loginform">Закрыть</span>-->
<!--							</div>-->
<!--							</span><br>-->
<!--                <a href="" class="hd_signup">Зарегистрироваться</a>-->
            </td>
        </tr>
    </table>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "top_multi",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>

</div>
