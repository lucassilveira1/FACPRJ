const password = document.getElementById('password');
const confirm_password = document.getElementById('confirm-password');
const showPassword = document.getElementById('showPassword')
        
const passIcon = document.getElementById("passIcon")
const confirmPassIcon = document.getElementById("confirmPassIcon")
const showIcon = document.getElementById("showIcon");
        
const letters = document.getElementById("login");

const showPassOpen = () => {
    passIcon.innerHTML = "<img src='../assets/lock-open-solid.svg' width='15px'>"
    confirmPassIcon.innerHTML = "<img src='../assets/lock-open-solid.svg' width='15px'>"
    showIcon.innerHTML = "<img src='../assets/eye-slash-regular.svg' width='15px'>"
};
        
const notShowPass = () => {
    passIcon.innerHTML = "<img src='../assets/lock-solid.svg' width='15px'>"
    confirmPassIcon.innerHTML = "<img src='../assets/lock-solid.svg' width='15px'>"
    showIcon.innerHTML = "<img src='../assets/eye-regular.svg' width='15px'>"
};

        
// Validando a senha
function validatePassword() {
    if (password.value !== confirm_password.value) {
        confirm_password.setCustomValidity("Senhas diferentes.");
    } else {
        confirm_password.setCustomValidity('')
    };
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
        
        
// mostrando senha e mudando icones
        
showPassword.addEventListener('change', function() {
    if (showPassword.checked) {
        password.type = 'text';
        confirm_password.type = 'text'; 
        // icones
        showPassOpen()
    } else {
        password.type = 'password';
        confirm_password.type = 'password';
              
        // icones
        notShowPass()
    }
});
        
// MÁSCARAS
        
function mask(o,f){
    v_obj=o
    v_fun=f
    setTimeout(execmask(), 1)
}
    
function execmask(){
    v_obj.value=v_fun(v_obj.value)
}
    
function masktel(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");
    return v;
}
    
function maskcpf(v){ 
    v=v.replace(/\D/g,"");
    v=v.replace(/(\d{3})(\d)/,"$1.$2");
    v=v.replace(/(\d{3})(\d)/,"$1.$2");
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
    return v;
}
function maskcep(v) {
    v = v.replace(/\D/g, '');
    v = v.substring(0, 8);
    v = v.replace(/^(\d{5})(\d{3})$/, '$1-$2');
    return v;
}

function idcss( el ){
        return document.getElementById( el );
}
    
window.onload = function(){
        
    //TEL FIXO -------
    idcss('fixo').setAttribute('maxlength', 14);
    idcss('fixo').onkeyup = function(){
            mask( this, masktel );
    }
    //-------------
         
    //CELULAR -------
    idcss('celular').setAttribute('maxlength', 15);
    idcss('celular').onkeyup = function(){
        mask( this, masktel );
    }

        
    //CPF ---------
    idcss('cpf').setAttribute('maxlength', 14);
    idcss('cpf').onkeyup = function(){
            mask( this, maskcpf );
    }

    
    //CEP ---------
    idcss('cep_input').setAttribute('maxlength', 9);
    idcss('cep_input').onkeyup = function(){
        mask( this, maskcep );
    }
}