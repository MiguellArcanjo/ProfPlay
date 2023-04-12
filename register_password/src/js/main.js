const password1 = document.querySelector('.senha1');
const password2 = document.querySelector('.senha2')
const olhin1 = document.querySelector('.olhin');
const olhin2 = document.querySelector('.olhin1')

function showHide1(){

    if(password1.type === 'password'){
        password1.setAttribute('type', 'text');
        olhin1.classList.add('hide1');

    }
    else{
        password1.setAttribute('type', 'password');
        olhin1.classList.remove('hide1');
    }

}

function showHide2(){

    if(password2.type === 'password'){
        password2.setAttribute('type', 'text');
        olhin2.classList.add('hide2');

    }
    else{
        password2.setAttribute('type', 'password');
        olhin2.classList.remove('hide2');
    }

}

//Utilizando o ENTER para confirmar


// inicio das verificações de cadastro

// if(password1 == password2){

// }
// else{

// }
