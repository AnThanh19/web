
var modalTicket = document.querySelector('.modal-ticket');
var bookTicketBtns = document.querySelectorAll('.js-btn-book-tickets');
var closeModalTicket = document.querySelector('.js-modal-close');
var modalContent = document.querySelector('.modal-content');
function showModalTicket(){
    modalTicket.classList.add('open__modal');
}

function hideModalTicket(){
    modalTicket.classList.remove('open__modal');
}

for (const bookTicketBtn of bookTicketBtns){
    bookTicketBtn.addEventListener('click', showModalTicket);
}
closeModalTicket.addEventListener('click', hideModalTicket);
modalTicket.addEventListener('click', hideModalTicket);
modalContent.addEventListener('click', function(event){
    event.stopPropagation();
})