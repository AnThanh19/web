
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
