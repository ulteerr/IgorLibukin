const types = ['application/vnd.rar', 'application/zip']
let dragAndDrop = document.querySelector('.drag-and-drop'),
    fileUpload = [],
    dragAndDropBlock = document.querySelector('.dnd_block'),
    fileList = document.querySelector('.images-list'),
    avatar = document.querySelector('.avatar'),
    text = document.querySelector('.text')

if (dragAndDrop) {
    dragAndDrop.addEventListener('dragenter', (e) => {
        e.preventDefault()
        dragAndDrop.classList.add('active')
    })

    dragAndDrop.addEventListener('dragleave', (e) => {
        e.preventDefault()
        dragAndDrop.classList.remove('active')
    })

    dragAndDrop.addEventListener('dragover', (e) => {
        e.preventDefault()
    })

    dragAndDrop.addEventListener('drop', (e) => {
        e.preventDefault()
        fileCheck(e)
        dragAndDrop.classList.remove('active');
    })
}
const inputElement = document.getElementById("upload");
if (inputElement) {
    inputElement.addEventListener("change", handleFiles, false)

    function handleFiles() {
        const fileList = this.files[0]
        if (fileUpload.length <= 0) {
            if (!types.includes(fileList.type)) {
                addBlock('Invalid format, please upload ' +
                    'files with .rar or .zip extension')
            } else if (fileList.size > 10000000) {
                addBlock('File upload limit exceeded, maximum limit 10 MB')
            } else {
                fileUpload.push(fileList)
                add(fileList)
                removeErrorBLock('none')
            }
        } else if (fileUpload.length > 1) {
            fileUpload.shift()
        }
    }
}

function fileCheck(e) {
    const files = e.dataTransfer.files
    if (fileUpload.length <= 0) {
        ``
        addBlock('Invalid format, please upload ' +
            'files with .rar or .zip extension')
        for (let key in files) {
            console.log(files[key].size)
            if (!types.includes(files[key].type)) {
                continue
            } else if (files.length > 1) {
                break
            } else if (files[key].size > 10000000) {
                addBlock('File upload limit exceeded, maximum limit 10 MB')
                continue
            }
            removeErrorBLock('none')
            fileUpload.push(files[key])
            add(files[key])

        }
    }

}

function add(file) {
    let fileName = file.name
    dragAndDropBlock.style.cssText = 'display:none !important'
    avatar.style.display = 'block'
    fileList.innerHTML += `<img src="/images/file.svg" class="images-list-picture">
                           <img class="btn_close_x" src="/images/x.svg" alt="x"></br>
                           <p class="text_list">${fileName}</p>`
    const x = document.querySelector('.btn_close_x')
    if (x) {
        x.addEventListener('click', () => {
            newDnd()
            removeErrorBLock('block')
        })
    }
}
$("#feedbackForm").validate({
    rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
        },
        message: {
            required: true,
            minlength: 2
        }
    },
    submitHandler: function () {
        let formData = new FormData()
        let name = $('#name').val()
        let email = $('#email').val()
        let phone = $('#phone').val()
        let message = $('#message').val()
        let text = {name: name, email: email, phone: phone, message: message}
        for (let key in text) {
            formData.append(key, text[key]);
        }
        let loading = document.querySelector('.loader')
        loading.style.display = 'block'
        formData.append('file', fileUpload[0])
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
            },
        })
        $.ajax({
            url: '',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function () {
                loading.style.display = 'none'
                $('#feedbackForm')[0].reset()
                $('.success').css("display", "block")
                newDnd()
                removeErrorBLock('block')
            }
        })
    }
})

function addBlock(textMessage) {
    text.style.display = 'block'
    text.classList.add('error');
    text.textContent = textMessage

}

function removeErrorBLock(css) {
    text.classList.remove('error')
    text.style.display = css
    text.textContent = 'Download files in .rar or .zip format, maximum file size 10 MB'
}

function newDnd() {
    fileUpload = []
    fileList.innerHTML = ""
    dragAndDropBlock.style.display = 'flex'
    avatar.style.display = 'none'
}

