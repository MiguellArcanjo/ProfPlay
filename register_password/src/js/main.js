const password1 = document.querySelector('.senha1');
const password2 = document.querySelector('.senha2')
const olhin1 = document.querySelector('.olhin');
const olhin2 = document.querySelector('.olhin1')

function showHide(){

    if(password1.type === 'password' && password2.type === 'password'){
        password1.setAttribute('type', 'text');
        password2.setAttribute('type', 'text');
        olhin1.classList.add('hide1');
        olhin2.classList.add('hide2');

    }
    else{
        password1.setAttribute('type', 'password');
        password2.setAttribute('type', 'password');
        olhin1.classList.remove('hide1');
        olhin2.classList.remove('hide2');
    }

}