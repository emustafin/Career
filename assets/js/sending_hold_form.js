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
                console.log(holdf_tel);
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
                var holdf_directions = document.querySelector('.holdf_directions').value;
                // console.log(holdf_directions);
                if( '' == holdf_directions ){
                    document.querySelector('.form__holdf_directions .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    document.querySelector('.form__holdf_directions .form__form-mistake').style.display = "none";
                }

                // Город
                var holdf_town = document.querySelector('.holdf_town').value;
                // console.log(holdf_town);
                if( '' == holdf_town ){
                    document.querySelector('.form__holdf_town .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    document.querySelector('.form__holdf_town .form__form-mistake').style.display = "none";
                }

                // Возраст
                var holdf_age = document.querySelector('.holdf_age').value;
                // console.log(holdf_age);
                if( '' == holdf_age && 0 < holdf_age ){
                    document.querySelector('.form__holdf_age .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    document.querySelector('.form__holdf_age .form__form-mistake').style.display = "none";
                }

                // Гражданство
                var holdf_citizenship = document.querySelector('.holdf_citizenship').value;
                // console.log(holdf_citizenship);
                if( '' == holdf_citizenship ){
                    document.querySelector('.form__holdf_citizenship .form__form-mistake').style.display = "block";
                    fl_send = false;
                } else{
                    document.querySelector('.form__holdf_citizenship .form__form-mistake').style.display = "none";
                }

                // Файл

                // Политика конфиденциальности
                var holdf_agree_checkbox = document.querySelector('.holdf_agree_checkbox').checked;
                // console.log(holdf_agree_checkbox);
                if( false == holdf_agree_checkbox ){
                    document.querySelector('.form_policy input').style.border = "red";
                    fl_send = false;
                } else{
                    document.querySelector('.form_policy input').style.border = "black";
                }

                // Проверка ошибок
                if( !fl_send ){

                    return false;
                } else{
                    var data = {
                            action                  : 'send_hold_form',
                            holdf_name              : holdf_name,
                            holdf_email             : holdf_email,
                            holdf_tel               : holdf_tel,
                            holdf_directions        : holdf_directions,
                            holdf_town              : holdf_town,
                            holdf_age               : holdf_age,
                            holdf_citizenship       : holdf_citizenship,
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

                    document.querySelector('.form__response-block').style.display = "block";
                } else{
                    document.querySelector('.form__form-message').innerHTML = "Что-то пошло не так...";
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