let desSeaech = document.getElementById('desSeaech')
let moboSearch = document.getElementById('moboSearch')
let searchBox = document.getElementById('searchBox')

desSeaech.addEventListener('click',function(){
    searchBox.classList.toggle('ssearchBoxActive')
})
moboSearch.addEventListener('click',function(){
    searchBox.classList.toggle('ssearchBoxActive')
})
// ----------------------------------------
let desHamMenu = document.getElementById('desHamMenu')
let mobHamMenu = document.getElementById('mobHamMenu')
let hamMenu = document.getElementById('hamMenu')
let btnclose = document.getElementById('btn-close')

desHamMenu.addEventListener('click' , function(){
    hamMenu.classList.toggle('slide-up-fade-inActive')
})
mobHamMenu.addEventListener('click' , function(){
    hamMenu.classList.toggle('slide-up-fade-inActive')
})
btnclose.addEventListener('click' , function(){
    hamMenu.classList.toggle('slide-up-fade-inActive')
})