document.addEventListener("DOMContentLoaded", function(event) {

    var buzy_send = true;

    var phoneMask = IMask(
        document.querySelector('.holdf_tel'), {
          mask: '+{7}(000)000-00-00'
        }
    );

    if(document.querySelector('.hold_form_send')){
        document.querySelectorAll('.hold_form_send').forEach(item => {
            item.addEventListener('click', event => {
    
                event.preventDefault();
                var fl_send = true;

                document.querySelector('.form__response-block').style.display = "none";
                document.querySelector('.form__form-message').innerHTML = "";

                // Default
                var rel_type = document.querySelector('.rel_type').value;
                var vacancyid = document.querySelector('.vacancyid').value;
                var sourceurl = document.querySelector('.sourceurl').value;

                // Имя Фамилия
                var holdf_name = document.querySelector('.holdf_name').value;
                if( '' == holdf_name ){
                    document.querySelector('.form__holdf_name .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    document.querySelector('.form__holdf_name .form__form-mistake').style.display = "none";
                }

                // Email
                var holdf_email = document.querySelector('.holdf_email').value;
                if( '' == holdf_email ){
                    document.querySelector('.form__holdf_email .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    if (ValidateEmail(holdf_email)) {
                        document.querySelector('.form__holdf_email .form__form-mistake').style.display = "none";
                    } else{
                        document.querySelector('.form__holdf_email .form__form-mistake').style.display = "block";
                    }
                }

                // Телефон
                var holdf_tel = document.querySelector('.holdf_tel').value;
                if( '' == holdf_tel ){
                    document.querySelector('.form__holdf_tel .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    if( validatePhoneNumber(holdf_tel) ){
                        document.querySelector('.form__holdf_tel .form__form-mistake').style.display = "none";
                    } else{
                        document.querySelector('.form__holdf_tel .form__form-mistake').style.display = "block";
                    }
                }

                // Направление
                var holdf_directions = directionFormInput.value;
                if( '' == holdf_directions ){
                    document.querySelector('.form__holdf_directions .form__form-mistake').style.display = "block";
                    fl_send = false;
                    var holdf_town = '';
                    var holdf_age = '';
                    var holdf_citizenship = '';
                } else{
                    document.querySelector('.form__holdf_directions .form__form-mistake').style.display = "none";

                    holdf_directions = JSON.parse(holdf_directions)[0].value;
                    
                    if( 'Розничные магазины' == holdf_directions ){
                        // Город
                        var holdf_town = document.querySelector('input[name="holdf_town"]').value;
                        if( '' == holdf_town ){
                            document.querySelector('.form__holdf_town .form__form-mistake').style.display = "block";
                            fl_send = false;
                        } else{
                            document.querySelector('.form__holdf_town .form__form-mistake').style.display = "none";
                        }

                        // Возраст
                        var holdf_age = document.querySelector('input[name="holdf_age"]').value;
                        if( '' == holdf_age ){
                            document.querySelector('.form__holdf_age .form__form-mistake').style.display = "block";
                            fl_send = false;
                        } else if (0 >= holdf_age){
                            document.querySelector('.form__holdf_age .form__form-mistake').style.display = "block";
                            fl_send = false;
                        } else{
                            document.querySelector('.form__holdf_age .form__form-mistake').style.display = "none";
                        }
        
                        // Гражданство
                        var holdf_citizenship = document.querySelector('input[name="holdf_citizenship"]').value;
                        if( '' == holdf_citizenship ){
                            document.querySelector('.form__holdf_citizenship .form__form-mistake').style.display = "block";
                            fl_send = false;
                        } else{
                            document.querySelector('.form__holdf_citizenship .form__form-mistake').style.display = "none";
                            holdf_citizenship = JSON.parse(holdf_citizenship)[0].value;
                        }
                    } else{
                        var holdf_town = '';
                        var holdf_age = '';
                        var holdf_citizenship = '';
                    }
                }

                // Файл
                var hold_file_array = document.querySelector('#hold_file_array').value;

                // Политика конфиденциальности
                var holdf_agree_checkbox = document.querySelector('.holdf_agree_checkbox').checked;
                if( false == holdf_agree_checkbox ){
                    document.querySelector('.form_policy input').style.border = "red";
                    fl_send = false;
                } else{
                    document.querySelector('.form_policy input').style.border = "black";
                }

                var holdf_information = document.querySelector('.holdf_information').value;

                // Проверка ошибок
                if( !fl_send ){

                    return false;
                } else{
                    var data = {
                        action                  : 'send_hold_form',
                        rel_type                : rel_type,
                        vacancyid               : vacancyid,
                        sourceurl               : sourceurl,
                        holdf_name              : holdf_name,
                        holdf_email             : holdf_email,
                        holdf_tel               : holdf_tel,
                        holdf_directions        : holdf_directions,
                        holdf_town              : holdf_town,
                        holdf_age               : holdf_age,
                        holdf_citizenship       : holdf_citizenship,
                        hold_file_array         : hold_file_array,
                        holdf_information       : holdf_information,
                        holdf_agree_checkbox    : holdf_agree_checkbox
                    };
    
                    if( buzy_send ){
                        sending( data );
                    }
                }    
            })
        })
    }

    function sending( data ){

        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                
                if( true == resp.success ){
                    document.getElementById('rhform').reset();
                    currentFiles = []
                    uploadFile.style.display = 'none'
                    preview.style.display = 'flex'
                    preview.classList.remove('errorFileImg')
                    preview.innerHTML = `
                        <p class="file__name">Выберите файл или перетащите сюда</p>
                        <p class="file__subname">До 2 файлов по 5 Мб форматов pdf, doc, docx, rtf</p>
                    `
                    document.querySelector('.form__response-block').style.display = "block";
                    document.querySelector('.form__response-title').innerHTML = "Спасибо за отклик! Скоро ответим!";
                } else{
                    document.querySelector('.form__response-block').style.display = "block";
                    document.querySelector('.form__response-title').innerHTML = "Что-то пошло не так...";
                }
            }
        };

        //TODO
        var str = "";
        for (var key in data) {
            if (str != "") {
                str += "&";
            }
            str += key + "=" + encodeURIComponent(data[key]);
        }

        request.send( str );
    }

    function ValidateEmail(email){

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test( email )){
            return (true)
        } else{
            return (false)
        }
    }

    function validatePhoneNumber(input_str) {

        var re = /[\+]?[\+7]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{2}[-\s\.]?[0-9]{2}$/;
        return re.test(input_str);
    }

})