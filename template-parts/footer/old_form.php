<div style="display:none;">

    <div class="form__form-name">
        <p class="form__form-name-value">Имя и фамилия*</p>
        <!-- [text* holdf_name class:form__form-input] -->
        <p>
            <input type="text" name="holdf_name" value size="40" class="holdf_name">
        </p>
        <div class="form__form-mistake">это обязательное поле</div>
    </div>
    <div style="display:none;">
        <input type="text" name="text-rel_type" value="hold" size="40" class="rel_type">
        <input type="text" name="text-vacancyid" value size="40" class="vacancyid">
        <input type="text" name="text-sourceurl" value size="40" class="sourceurl">
    </div>
    <div class="form__form-name">
        <p class="form__form-name-value">Электронная почта*</p>
        <!-- [email* holdf_email class:form__form-input] -->
        <input type="email" name="holdf_email" value size="40" class="holdf_email">
        <div class="form__email-mistake">неверный формат почты</div>
    </div>

    <div class="form__form-name">
        <p class="form__form-name-value">Телефон*</p>
        <!-- [mask* holdf_tel class:form__form-input "+7 (___) ___-__-__" "+7 (___) ___-__-__"] -->
        <input type="tel" name="holdf_tel" value="" class="form__form-input" size="40" aria-required="1" placeholder="+7 (___) ___-__-__" data-mask="+7 (___) ___-__-__">
        <div class="form__form-mistake">это обязательное поле</div>
    </div>

    <div class="form__form-name">
        <p class="form__form-name-value">Город*</p>
        <!-- [text* holdf_town class:form__form-input form__city-select placeholder "Выбери город" ""] -->
        <input type="text" name="holdf_town" value="" size="40" class="form__form-input" aria-required="true" aria-invalid="false" placeholder="Выбери город">
        <div class="form__form-mistake">это обязательное поле</div>
    </div>

    <div class="form__form-name">
        <p class="form__form-name-value">Направление</p>
        <div class="form__dropdown">
            <!-- [text* holdf_directions class:holdf_directions selectMode form__city-select placeholder "Выбери направление" ""] -->
            <input type="text" name="holdf_directions" value="" size="40" class="holdf_directions" aria-required="true" aria-invalid="false" placeholder="Выбери направление">
            <div class="form__filter-item-select-arrow">
                <svg class="profession__filter-item-select-arrow-image" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z" fill="black" />
                </svg>
            </div>
        </div>
        <div class="form__form-mistake">это обязательное поле</div>
    </div>

    <div class="form__form-name">
        <p class="form__form-name-value">Специализация</p>
        <div class="form__dropdown">
            <!-- [text* holdf_citizenship class:holdf_citizenship selectMode form__spezialisation-select placeholder "Выбери специализацию" ""] -->
            <input type="text" name="holdf_citizenship" value="" size="40" class="holdf_citizenship" aria-required="true" aria-invalid="false" placeholder="Выбери специализацию">
            <div class="form__filter-item-select-arrow">
                <svg class="profession__filter-item-select-arrow-image" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z" fill="black" />
                </svg>
            </div>
        </div>
        <div class="form__form-mistake">это обязательное поле</div>
    </div>
    <div class="form__file-uploader">
        <!-- [mfile upload-file-803 filetypes:jpeg|png|jpg|gif|txt|docx|doc|pdf|rtf limit:5242880 max-file:2] -->
        <input type="file" size="40" class="drag-n-drop-file d-none" aria-invalid="false" multiple="multiple" data-name="upload-file-803" data-type="jpeg|png|jpg|gif|txt|docx|doc|pdf|rtf" data-limit="5242880" data-max="2" data-id="437" accept=".jpeg, .png, .jpg, .gif, .txt, .docx, .doc, .pdf, .rtf">
    </div>
    <div class="form__form-name">
        <!-- [text holdf_information class:form__information placeholder "Дополнительная информация"] -->
        <input type="text" name="holdf_information" value="" size="40" class="form__information" aria-invalid="false" placeholder="Дополнительная информация">
    </div>
    <div class="form_policy">
        <label class="form__form-label vacancy__form-label_checkbox">
            <!-- [checkbox* holdf_agree_checkbox class:form__input-checkbox ""] -->
            <input type="checkbox" name="holdf_agree_checkbox" value="">
            <span class="form__form-agree">Я согласен с </span>
            <a href="/privacy-policy/" class="form__form-politics">Политикой обработки персональных данных</a>
        </label>
    </div>
    
    <div class="form_submit">
        <input type="submit" value="Отправить" class="form__response">
    </div>
    
    <div class="form__form-message"></div>
    
    <!-- Вставить разметку об успешной отправке -->
    <div class="form__response-block">
        <h2 class="form__response-title">
        Спасибо за отклик! Скоро ответим!
        </h2>
    </div>
</div>