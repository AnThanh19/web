
var userInfoBtn = document.querySelector('.js-info'),
historyBtn = document.querySelector('.js-his'),
updateBtn = document.querySelector('.js-update');

var userInfo = document.querySelector('.user-info'),
userHistories = document.querySelectorAll('.user-info-history'),
userUpdate = document.querySelector('.user-info-update');

userInfoBtn.addEventListener('click', function(){
    userInfoBtn.classList.add('selected');
    historyBtn.classList.remove('selected');
    updateBtn.classList.remove('selected');
    userInfo.classList.add('open__block');
    for(const userHistory of userHistories){
        userHistory.classList.remove('open');
    }
    userHistories[0].classList.remove('open__block');
    userUpdate.classList.remove('open__block');
})
historyBtn.addEventListener('click', function(){
    userInfoBtn.classList.remove('selected');
    historyBtn.classList.add('selected');
    updateBtn.classList.remove('selected');
    userInfo.classList.remove('open__block');
    for(const userHistory of userHistories){
        userHistory.classList.add('open');
    }
    userHistories[0].classList.add('open__block');
    userUpdate.classList.remove('open__block');
})
updateBtn.addEventListener('click', function(){
    userInfoBtn.classList.remove('selected');
    historyBtn.classList.remove('selected');
    updateBtn.classList.add('selected');
    userInfo.classList.remove('open__block');
    for(const userHistory of userHistories){
        userHistory.classList.remove('open');
    }
    userHistories[0].classList.remove('open__block');
    userUpdate.classList.add('open__block');
})