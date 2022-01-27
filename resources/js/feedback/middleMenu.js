let middleMenu = document.querySelector('.middle_menu'),
    arrow = document.querySelector('.arrow')

arrow.addEventListener('click', (event) => {
    arrow.classList.toggle("open_arrow")
    if(!middleMenu.classList.contains('active')){
        middleMenu.classList.add('active')
        middleMenu.style.maxHeight = middleMenu.scrollHeight + 'px'
    } else {
        middleMenu.classList.remove('active')
        middleMenu.style.maxHeight = 0
    }

})
