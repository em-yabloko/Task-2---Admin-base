<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("result_list");
?><?$APPLICATION->IncludeComponent(
	"bitrix:form.result.list",
	"",
	Array(
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "result_edit.php",
		"NEW_URL" => "result_new.php",
		"NOT_SHOW_FILTER" => array("",""),
		"NOT_SHOW_TABLE" => array("",""),
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_STATUS" => "Y",
		"VIEW_URL" => "result_view.php",
		"WEB_FORM_ID" => "1"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>