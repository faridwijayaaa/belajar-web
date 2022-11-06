check = () => {
  let password = document.getElementById("password").value;
  const button = document.querySelector("#btnSubmit");

  let msg = [
    "Passwords are not the same",
    "the password is not the same as the provisions",
    "Password is correct",
    "password cannot be empty",
    "your password is less than 6 characters",
  ];

  if (password == "") {
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerHTML = msg[3];
    button.disabled = true;
    return false;
  } else if (password.length < 6) {
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerHTML = msg[4];
    button.disabled = true;
    return false;
  } else {
    document.getElementById("msg").style.color = "green";
    document.getElementById("msg").innerHTML = msg[2];
    button.disabled = false;
    return true;
  }
};

checkMatch = () => {
  const button = document.querySelector("#btnSubmit");
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("confirmPw").value;

  let msg = [
    "Passwords are not the same",
    "the password is not the same as the provisions",
    "Password is matching",
  ];

  if (!check()) {
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerHTML = msg[1];
    button.disabled = true;
  } else if (confirmPassword == password) {
    document.getElementById("msg").style.color = "green";
    document.getElementById("msg").innerHTML = msg[2];
    button.disabled = false;
  } else {
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerHTML = msg[0];
    button.disabled = true;
  }
};
