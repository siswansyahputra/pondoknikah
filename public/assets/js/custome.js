document.getElementById('show-password1').addEventListener('mousedown', function() {
    var passwordInput = document.getElementById('current_password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        document.getElementById('icon-eye').classList.remove('fa-eye');
        document.getElementById('icon-eye').classList.add('fa-eye-slash');
    }
});
document.getElementById('show-password1').addEventListener('mouseup', function() {
    var passwordInput = document.getElementById('current_password');
    if (passwordInput.type === 'text') {
        passwordInput.type = 'password';
        document.getElementById('icon-eye').classList.remove('fa-eye-slash');
        document.getElementById('icon-eye').classList.add('fa-eye');
    }
});
document.getElementById('show-password2').addEventListener('mousedown', function() {
    var passwordInput = document.getElementById('new_password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        document.getElementById('icon-eye').classList.remove('fa-eye');
        document.getElementById('icon-eye').classList.add('fa-eye-slash');
    }
});
document.getElementById('show-password2').addEventListener('mouseup', function() {
    var passwordInput = document.getElementById('new_password');
    if (passwordInput.type === 'text') {
        passwordInput.type = 'password';
        document.getElementById('icon-eye').classList.remove('fa-eye-slash');
        document.getElementById('icon-eye').classList.add('fa-eye');
    }
});
document.getElementById('show-password3').addEventListener('mousedown', function() {
    var passwordInput = document.getElementById('password_confirmation');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        document.getElementById('icon-eye').classList.remove('fa-eye');
        document.getElementById('icon-eye').classList.add('fa-eye-slash');
    }
});
document.getElementById('show-password3').addEventListener('mouseup', function() {
    var passwordInput = document.getElementById('password_confirmation');
    if (passwordInput.type === 'text') {
        passwordInput.type = 'password';
        document.getElementById('icon-eye').classList.remove('fa-eye-slash');
        document.getElementById('icon-eye').classList.add('fa-eye');
    }
});
function validateInput(input) {
    if (input.length < 6) {
        document.getElementById("warning1").innerHTML = "The password must be at least 6 characters.";
    } else {
        document.getElementById("warning1").innerHTML = "";
    }
}

function validateInput2(input2) {
    if (input2.length < 6) {
        document.getElementById("warning2").innerHTML = "The new password must be at least 6 characters.";
    } else {
        document.getElementById("warning2").innerHTML = "";
        document.getElementById("password_confirmation").disabled = false;
        document.getElementById("update_password").disabled = false;
    }
}
let input = document.getElementById("current_password");
let input2 = document.getElementById("new_password");
let input3 = document.getElementById("password_confirmation");
input.addEventListener("input", function() {
    validateInput(input.value);
});
input2.addEventListener("input", function() {
    validateInput2(input2.value);
});