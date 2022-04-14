function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};

function showConfirmPassword() {
    var x = document.getElementById("password_confirmation");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};

function showCurrentPassword() {
    var x = document.getElementById("current_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
} 