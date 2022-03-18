function upload(selector, options = {}){

    const input = document.querySelector(selector)

    const preview = document.createElement('div')
    preview.classList.add('file')
    preview.innerHTML = `
        <p class="file__name">Выберите файл или перетащите сюда</p>
        <p class="file__subname">До 2 файлов по 5 Мб форматов pdf, doc, docx, rtf</p>
    `
    const newFile = document.createElement('div')
    newFile.classList.add('new__file')
    newFile.innerHTML = 'добавить ещё один файл'

    const uploadFile = document.createElement('div')
    uploadFile.classList.add('file__wrapper')

    currentFiles = []

    input.insertAdjacentElement('afterend', preview)  

    if (options.accept && Array.isArray(options.accept)) {
        input.setAttribute('accept', options.accept.join(','))
    }

    const triggerInput = () => input.click()

    const changeHandler = event => {
        if (!event.length) {
        return
        }
        
        uploadFile.style.display = 'flex'

        preview.style.display = "none"
        input.insertAdjacentElement('afterend', uploadFile)
        uploadFile.innerHTML = ''

        files = Array.from(event)
        upload_file_to_server( files[0] );
        currentFiles.push(files[0])
        
        currentFiles.reverse().forEach(file => {
            uploadFile.insertAdjacentHTML('afterbegin',`
                <div id="uploadFile" class="file background__file">
                <p class="file__name">${file.name}</p>
                <p class="file__subname" data-name="${file.name}">
                    удалить файл
                    <svg data-name="${file.name}" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                            <path data-name="${file.name}" d="M7.15191 7.99995L3.57617 11.5757L4.4247 12.4242L8.00044 8.84848L11.5762 12.4242L12.4247 11.5757L8.84896 7.99995L12.4247 4.42421L11.5762 3.57568L8.00044 7.15142L4.4247 3.57568L3.57617 4.42421L7.15191 7.99995Z" fill="black"/>
                        </g>
                    </svg>
                </p>
                </div>
            `
            )
        })

        uploadFile.insertAdjacentElement('beforeend', newFile) 
        currentFiles.reverse()

        input.value = ''
    }

    const removeHandler = event => {
        if (!event.target.dataset.name) {
        return
        }
        
        const {name} = event.target.dataset
        currentFiles = currentFiles.filter(file => file.name !== name)

        if (!currentFiles.length) {
        uploadFile.style.display = 'none'
        preview.style.display = 'flex'
        }

        const block = uploadFile
        .querySelector(`[data-name="${name}"]`)
        .closest('.file')

        block.classList.add('removing')
        setTimeout(() => block.remove(), 300)
    }

    uploadFile.addEventListener('click', removeHandler)
    newFile.addEventListener('click', triggerInput)
    preview.addEventListener('click', triggerInput)
    input.addEventListener('change', ev => {
        changeHandler(ev.target.files)
    })

    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        document.querySelector('html').addEventListener(eventName, preventDefaults, false)
    })
    function preventDefaults (e) {
        e.preventDefault()
        e.stopPropagation()
    }

    preview.ondragover = function() {
        document.querySelector('.file__name').innerHTML = 'Перетащите файл сюда'
        document.querySelector('.file__name').classList.add('green')
        return false;
    };

    preview.ondragleave = function() {
        document.querySelector('.file__name').innerHTML = 'Выберите файл или перетащите сюда'
        document.querySelector('.file__name').classList.remove('green')
        return false;
    };

    preview.ondrop = function(e) {
        document.querySelector('.file__name').innerHTML = 'Выберите файл или перетащите сюда'
        document.querySelector('.file__name').classList.remove('green')
        let dt = e.dataTransfer
        let dropFile = dt.files
        changeHandler(dropFile)
        e.preventDefault();
    };

    newFile.ondrop = function(e) {
        let dt = e.dataTransfer
        let dropFile = dt.files
        changeHandler(dropFile)
        e.preventDefault();
    };
}

upload('#hold_file', {
    accept: ['.pdf', '.doc', '.docx', '.rtf'],
})

upload('#vacancy_file', {
    accept: ['.pdf', '.doc', '.docx', '.rtf'],
})

function upload_file_to_server( file ) {
    
    if (window.FormData != undefined) {

		var formData = new FormData();
		formData.append('action', 'upload_file');
		formData.append('file', file);
		formData.append('name', file.name);

        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        // request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

        console.log(file);
        console.log(formData);

        request.onreadystatechange = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                // console.log(resp);
                if( true == resp.success ){

                    return true;
                } else{
                    return false;
                }
            }
        };

        // array(1) { 
        //     ["file"]=> array(5) { 
        //         ["name"]=> string(63) "1. Установка_и_настройка_win_vpn_2fa (1).pdf" 
        //         ["type"]=> string(15) "application/pdf" 
        //         ["tmp_name"]=> string(57) "D:\Work\WorkV3\OpenServer\userdata\php_upload\phpF96C.tmp" 
        //         ["error"]=> int(0) 
        //         ["size"]=> int(2569478) 
        //     } 
        // } 
        // array(2) { 
        //     ["action"]=> string(11) "upload_file" 
        //     ["name"]=> string(63) "1. Установка_и_настройка_win_vpn_2fa (1).pdf" 
        // }

        //TODO
        // var str = "";
        // for (var key in formData) {
        //     if (str != "") {
        //         str += "&";
        //     }
        //     str += key + "=" + encodeURIComponent(formData[key]);
        // }

        request.send( formData );
    } else{
        return false;
    }
}