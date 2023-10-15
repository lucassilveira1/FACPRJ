// inputs
const legacyPassword = document.getElementById('legacyPassword');
const newPassword = document.getElementById('newPassword');
const confirmNewPassword = document.getElementById('confirm-password');

// icons
const passIcon = document.getElementById('passIcon');
const confirmPassIcon = document.getElementById('confirmPassIcon');
const legacyIcon = document.getElementById('legacyIcon');
const showIcon = document.getElementById('showIcon');
const showPassword = document.getElementById('showPass');

// button
const button = document.getElementById('enviar');

const showPassOpen = () => {
    legacyIcon.innerHTML = "<img src='../assets/lock-open-solid.svg' width='15px'>";
    passIcon.innerHTML = "<img src='../assets/lock-open-solid.svg' width='15px'>"
    confirmPassIcon.innerHTML = "<img src='../assets/lock-open-solid.svg' width='15px'>"
    showIcon.innerHTML = "<img src='../assets/eye-slash-regular.svg' width='15px'>"
};
        
const notShowPass = () => {
    legacyIcon.innerHTML = "<img src='../assets/lock-solid.svg' width='15px'>";
    passIcon.innerHTML = "<img src='../assets/lock-solid.svg' width='15px'>"
    confirmPassIcon.innerHTML = "<img src='../assets/lock-solid.svg' width='15px'>"
    showIcon.innerHTML = "<img src='../assets/eye-regular.svg' width='15px'>"
};

function validatePassword() {
    if(newPassword.value !== confirmNewPassword.value) {
        confirmNewPassword.setCustomValidity('Senhas diferentes.')
    } else {
        confirmNewPassword.setCustomValidity('');
    }
}

newPassword.onchange = validatePassword;
confirmNewPassword.onkeyup = validatePassword;

showPassword.addEventListener('change', function() {

    if(showPassword.checked) {
        legacyPassword.type = 'text';
        newPassword.type = 'text';
        confirmNewPassword.type = 'text';
        // icones
        showPassOpen();
    } else {
        legacyPassword.type = 'password';
        newPassword.type = 'password';
        confirmNewPassword.type = 'password';
        // icones
        notShowPass();
    }
})