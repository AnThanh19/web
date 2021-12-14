
var modalTicket = document.querySelector('.js-modal-ticket');
var bookTicketBtns = document.querySelectorAll('.js-btn-book-tickets');
var closeModalTicket = document.querySelector('.js-modal-close');
var modalContent = document.querySelector('.modal-content');
function showModalTicket(){
    modalTicket.classList.add('open');
    datGheModal.classList.remove('open');
}

function hideModalTicket(){
    modalTicket.classList.remove('open');
}

for (const bookTicketBtn of bookTicketBtns){
    bookTicketBtn.addEventListener('click', showModalTicket);
}
closeModalTicket.addEventListener('click', hideModalTicket);
modalTicket.addEventListener('click', hideModalTicket);
modalContent.addEventListener('click', function(event){
    event.stopPropagation();
})


// Dat Ghe CSS
var datGheModal = document.querySelector('.modal-ticket.js-datghe-modal');
var premiereBtn = document.querySelector('.premiere-sub-btn');
var closeModalTicket2 = document.querySelector('.js-datghe-modal .js-modal-close');
var modalContent2 = document.querySelector('.js-datghe-modal .modal-content');

function hideDatGheModal(){
    modalTicket.classList.remove('open');
    datGheModal.classList.remove('open');
}
datGheModal.addEventListener('click', hideDatGheModal);

closeModalTicket2.addEventListener('click', function(){
    modalTicket.classList.remove('open');
    datGheModal.classList.remove('open');
})

premiereBtn.addEventListener('click', function(){
    modalTicket.classList.remove('open');
    datGheModal.classList.add('open');
})

seatSelects = document.querySelectorAll('.seat.active');
seatSelectCps = document.querySelectorAll('.seat.seat-couple');

for(const seatSelect of seatSelects){
    seatSelect.addEventListener('click', function(){
        seatSelect.classList.toggle('checked');
    })
}

modalContent2.addEventListener('click', function(event){
    event.stopPropagation();
})