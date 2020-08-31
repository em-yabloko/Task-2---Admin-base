form-button contact-form__bottom-button<!DOCTYPE html>
<html lang="ru">
<head><title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="shortcut icon" href="/bitrix/templates/furniture_pale-blue/components/bitrix/form.result.new/build/images/favicon.604825ed.ico" type="image/x-icon">
	<link href="/bitrix/templates/furniture_pale-blue/components/bitrix/form.result.new/build/css/common.css" rel="stylesheet">
</head>
<body>
<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
            ваших требований
        </div>
    </div>
    <form class="contact-form__form" action="result_list.php" method="POST">
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input"><label class="input__label" for="medicine_name">
                <div class="input__label-text">Ваше имя*</div>
                <input class="input__input" type="text" id="medicine_name" name="name" value=""
                       required="">
                <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
            </label></div>
            <div class="input contact-form__input"><label class="input__label" for="medicine_company">
                <div class="input__label-text">Компания/Должность*</div>
                <input class="input__input" type="text" id="medicine_company" name="company" value=""
                       required="">
                <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
            </label></div>
            <div class="input contact-form__input"><label class="input__label" for="medicine_email">
                <div class="input__label-text">Email*</div>
                <input class="input__input" type="email" id="medicine_email" name="email" value=""
                       required="">
                <div class="input__notification">Неверный формат почты</div>
            </label></div>
            <div class="input contact-form__input"><label class="input__label" for="medicine_phone">
                <div class="input__label-text">Номер телефона*</div>
                <input class="input__input" type="tel" id="medicine_phone"
                       data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                       x-autocompletetype="phone-full" name="phone" value="" required=""></label></div>
        </div>
        <div class="contact-form__form-message">
            <div class="input"><label class="input__label" for="medicine_message">
                <div class="input__label-text">Сообщение</div>
                <textarea class="input__input" type="text" id="medicine_message" name="medicine_message"
                          value=""></textarea>
                <div class="input__notification"></div>
            </label></div>
        </div>
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
        </div>
<div class="form-button__title", "form-button contact-form__bottom-button"><input type="submit" value="Оставить заявку" name="myAction"></div>
    </form>
</div>
</body>
</html>
