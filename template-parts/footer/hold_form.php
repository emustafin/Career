<div class='control_hold_form'>
    <input type="hidden" name="text-rel_type" size="40" class="rel_type" value="hold">
    <input type="hidden" name="text-vacancyid" size="40" class="vacancyid" value>
    <input type="hidden" name="text-sourceurl" size="40" class="sourceurl" value>
</div>
<div class="hform form__holdf_name">
    <p class="form__form-name-value">Имя и фамилия*</p>
    <input type="text" placeholder="Имя и фамилия" name="holdf_name" value size="40" class="hform__input holdf_name">
    <div class="form__form-mistake" style="display:none;">это обязательное поле</div>
</div>
<div class="hform form__holdf_email">
    <p class="form__form-name-value">Электронная почта*</p>
    <input type="email" placeholder="test@test.ru" name="holdf_email" value size="40" class="hform__input holdf_email">
    <div class="form__form-mistake" style="display:none;">неверный формат почты</div>
</div>

<div class="hform form__holdf_tel">
    <p class="form__form-name-value">Телефон*</p>
    <input type="tel" name="holdf_tel" value="" class="hform__input holdf_tel" size="40" aria-required="1" placeholder="+7 (___) ___-__-__" data-mask="+7 (___) ___-__-__">
    <div class="form__form-mistake" style="display:none;">это обязательное поле</div>
    <div class="form__form-mistake_format" style="display:none;">неверный формат почты</div>
</div>

<div class="form__holdf_directions">
    <p class="form__form-name-value">Направление</p>
    <div class="form__dropdown">
        <input type="text" name="holdf_directions" value="" size="40" class="holdf_directions" aria-required="true" aria-invalid="false" placeholder="Выбери направление">
        <div class="form__filter-item-select-arrow">
            <svg class="profession__filter-item-select-arrow-image" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z" fill="black" />
            </svg>
        </div>
    </div>
    <div class="form__form-mistake" style="display:none;">это обязательное поле</div>
</div>

<div class="form__holdf_town" style="display:none;">
    <p class="form__form-name-value">Город*</p>
    <input type="text" name="holdf_town" value="" placeholder="Город" size="40" class="holdf_town" aria-required="true" aria-invalid="false" placeholder="">
    <div class="form__form-mistake" style="display:none;">это обязательное поле</div>
</div>
<div class="hform form__holdf_age" style="display:none;">
    <p class="form__form-name-value">Возраст*</p>
    <input type="number" name="holdf_age" value="" placeholder="Возраст" min="1" class="hform__input holdf_age" aria-required="true" aria-invalid="false" placeholder="">
    <div class="form__form-mistake" style="display:none;">это обязательное поле</div>
</div>
<div class="form__holdf_citizenship" style="display:none;">
    <p class="form__form-name-value">Гражданство*</p>
    <div class="form__dropdown">
        <input type="text" name="holdf_citizenship" value="" size="40" class="holdf_citizenship" aria-required="true" aria-invalid="false" placeholder="Выбери гражданство">
        <div class="form__filter-item-select-arrow">
            <svg class="profession__filter-item-select-arrow-image" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z" fill="black" />
            </svg>
        </div>
    </div>
    <div class="form__form-mistake" style="display:none;">это обязательное поле</div>
</div>

<div class="form__file-uploader">
    <!-- <input type="file" size="40" class="drag-n-drop-file d-none" aria-invalid="false" multiple="multiple" data-name="upload-file-803" data-type="jpeg|png|jpg|gif|txt|docx|doc|pdf|rtf" data-limit="5242880" data-max="2" data-id="437" accept=".jpeg, .png, .jpg, .gif, .txt, .docx, .doc, .pdf, .rtf"> -->
    <div class="drag__and__drop">
        <input type="text" name="hold_file_array" id="hold_file_array" class="hidden">
        <input type="file" name="hold_file" id="hold_file">
    </div>
</div>
<div class="hform form__holdf_information">
    <input type="text" name="holdf_information" value="" size="40" class="hform__input holdf_information" aria-invalid="false" placeholder="Дополнительная информация">
</div>
<div class="form_policy">
    <label class="form__form-label vacancy__form-label_checkbox">
        <input type="checkbox" name="holdf_agree_checkbox" value="" class="holdf_agree_checkbox">
        <span class="wpcf7-list-item-label"></span>
        <span class="form__form-agree">Я согласен с </span>
        <a href="/privacy-policy/" class="form__form-politics">Политикой обработки персональных данных</a>
    </label>
</div>

<div class="form_submit">
    <input type="submit" value="Отправить" class="hold_form_send">
</div>

<div class="form__form-message"></div>

<!-- Вставить разметку об успешной отправке -->
<div class="form__response-block" style="display:none;">
    <h2 class="form__response-title">
    Спасибо за отклик! Скоро ответим!
    </h2>
</div>
