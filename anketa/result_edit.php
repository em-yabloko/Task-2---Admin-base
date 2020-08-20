<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("result_edit");
?><?$APPLICATION->IncludeComponent(
	"bitrix:form.result.edit",
	"",
	Array(
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "result_list.php",
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_FOLDER" => "/anketa/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("edit"=>"#RESULT_ID#/"),
		"USE_EXTENDED_ERRORS" => "Y",
		"VIEW_URL" => "result_view.php"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>