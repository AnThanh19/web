// TRAILER
var modalTrailer = document.querySelector('.js-modal-trailer');
var trailerBtns = document.querySelectorAll('.js-trailer-btn');
var modalBodyTrailer = document.querySelector('.js-modal__body');


function openTrailerForm(){
    modalTrailer.classList.add('open');
    modalBodyTrailer.classList.add('open');
    
}


function closeModalTrailer(){
    modalBodyTrailer.classList.remove('open');
    modalTrailer.classList.remove('open');
}

for(const trailerBtn of trailerBtns){
    trailerBtn.addEventListener('click', openTrailerForm);
}
modalTrailer.addEventListener('click', closeModalTrailer);