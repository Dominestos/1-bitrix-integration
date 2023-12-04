<div class="hd_header">
    <table>
        <tr>
            <td rowspan="2" class="hd_companyname">
                <h1>
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/logo.php"
                      )
                    );?>
                </h1>
            </td>
            <td rowspan="2" class="hd_txarea">
                <span class="tel"><?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/phone.php"
                      )
                    );?></span>	<br/>
                <?=GetMessage('WORKING_TIME')?>: <span class="workhours">
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/workhours.php"
                      )
                    );?></span>
            </td>
            <td style="width:232px">
                <?$APPLICATION->IncludeComponent(
                  "bitrix:search.form",
                  "search_form_new",
                  array(
                    "PAGE" => "#SITE_DIR#search/index.php",
                    "USE_SUGGEST" => "N",
                    "COMPONENT_TEMPLATE" => "search_form_new"
                  ),
                  false
                );?>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 11px;">
                <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_compact", 
	array(
		"FORGOT_PASSWORD_URL" => "/user/",
		"PROFILE_URL" => "/user/profile.php",
		"REGISTER_URL" => "/user/register.php",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "auth_compact"
	),
	false
);?>
            </td>
        </tr>
    </table>
    <?$APPLICATION->IncludeComponent(
      "bitrix:menu",
      "new-menu-template",
      Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "COMPONENT_TEMPLATE" => "horizontal_multilevel",
        "DELAY" => "N",
        "MAX_LEVEL" => "2",
        "MENU_CACHE_GET_VARS" => "",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "N"
      )
    );?>
</div>
