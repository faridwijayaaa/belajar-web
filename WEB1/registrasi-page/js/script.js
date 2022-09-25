check = () => {
    let password = document.getElementById('password').value;
    
    let msg = [
            "Passwords are not the same",
            "the password is not the same as the provisions",
            "Password is correct",
            "password cannot be empty",
            "your password is less than 6 characters"
    ];

    if (password == '') {
        document.getElementById('msg').style.color = 'red';
        document.getElementById('msg').innerHTML = msg[3];
        return false;
    } else if (password.length < 6) {
        document.getElementById('msg').style.color = 'red';
        document.getElementById('msg').innerHTML = msg[4];
        return false;
    } else {     
        if (isNaN(password[0])) {
            document.getElementById('msg').innerHTML = msg[1];
            document.getElementById('msg').style.color = 'red';
            return false;
        } else if (isNaN(password[1])) {
            document.getElementById('msg').style.color = 'red';
            document.getElementById('msg').innerHTML = msg[1];
            return false;
        } else if (password.charAt(2) < 'A' || password.charAt(2) > 'Z') {
            document.getElementById('msg').innerHTML = msg[1];
            document.getElementById('msg').style.color = 'red';
            return false;
        } else if (isNaN(password[0]) & isNaN(password[1]) & password.charAt(2) < 'A' || password.charAt(2) > 'Z') {
            document.getElementById('msg').style.color = 'red';
            document.getElementById('msg').innerHTML = msg[1];
            return false;
        } else {
            document.getElementById('msg').style.color = 'green';
            document.getElementById('msg').innerHTML = msg[2];
            return true;
        }   
    }
}

checkMatch = () => {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPw').value;
    
    let msg = [
            "Passwords are not the same",
            "the password is not the same as the provisions",
            "Password is matching"
    ];

    if (!check()) {
        document.getElementById('msg').style.color = 'red';
        document.getElementById('msg').innerHTML = msg[1];
    } else if (confirmPassword == password ) {
        document.getElementById('msg').style.color = 'green';
        document.getElementById('msg').innerHTML = msg[2];
    } else {
        document.getElementById('msg').style.color = 'red';
        document.getElementById('msg').innerHTML = msg[0];
    }
}
