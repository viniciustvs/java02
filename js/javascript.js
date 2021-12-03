
function validar (){
    let usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;
    if(usuario === 'user01' && senha === '123teste56' || usuario === 'user02' && senha === '56teste123'){
        alert(`Seja bem vindo ${usuario}`);
    } else {
        alert(`Dados inválidos`);
    }
}

    // senha.addEventListener('keyup' , function(event){
    //     if(event.keyCode === 13){
    //         event.preventDefault();
    //         document.getElementById('login').click;
    //     }
    // })