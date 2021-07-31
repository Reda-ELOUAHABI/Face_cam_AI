//Authntification System
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
  e.preventDefault();
  const username = loginForm.username.value;
  const password = loginForm.password.value;

  if (username === "1234" && password === "root") {
    // console.log("jekekkeke");
    alert("You have successfully logged in.");
    //  location.reload();
    location.replace("./Camera.html");
  } else {
    loginErrorMsg.style.opacity = 1;
  }
});
