check = () => {
  let password = document.getElementById("password").value;

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
    return false;
  } else if (password.length < 6) {
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerHTML = msg[4];
    return false;
  } else {
    document.getElementById("msg").style.color = "green";
    document.getElementById("msg").innerHTML = msg[2];
    document.getElementById("btnSubmit").disabled = false;
    return true;
  }
};

checkMatch = () => {
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
    document.getElementById("btnSubmit").disabled = true;
  } else if (confirmPassword == password) {
    document.getElementById("msg").style.color = "green";
    document.getElementById("msg").innerHTML = msg[2];
    document.getElementById("btnSubmit").disabled = false;
  } else {
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerHTML = msg[0];
    document.getElementById("btnSubmit").disabled = true;
  }
};

const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
  modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
  if (event.target === modal) {
    toggleModal();
  }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
