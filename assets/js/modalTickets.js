
var ticketForm = document.querySelector('.ticket-form'),
ticketFormBtn = document.querySelector('.premiere-sub-btn'),
datGhe = document.querySelector('.dat-ghe');
datGheBtn = document.querySelector('.js-datghe-btn');

ticketFormBtn.addEventListener('click', function(){
    ticketForm.classList.remove('open__block');
    datGhe.classList.add('open__block');
})


// DAT GHE 

var seatSelects = document.querySelectorAll('.seat.seat-standard.active'),
seatCoupleSelects = document.querySelectorAll('.seat.seat-couple'),
backBtn = document.querySelector('.back-btn');

for(const seatSelect of seatSelects){
    seatSelect.addEventListener('click',function(){
        seatSelect.classList.toggle('checked');
    })
}

for(const seatCoupleSelect of seatCoupleSelects){
    seatCoupleSelect.addEventListener('click',function(){
        seatCoupleSelect.classList.toggle('checked');
    })
}

backBtn.addEventListener('click', function(){
    ticketForm.classList.add('open__block');
    datGhe.classList.remove('open__block');
})