const password = document.querySelector('.password');
const olhin = document.querySelector('.olhin');

function showHide(){

    if(password.type === 'password'){
        password.setAttribute('type', 'text');
        olhin.classList.add('hide');
    }
    else{
        password.setAttribute('type', 'password');
        olhin.classList.remove('hide');
    }

}