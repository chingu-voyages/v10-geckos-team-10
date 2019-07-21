console.log(window.innerWidth);
var signUpTab = document.getElementsByClassName("signupContainer");
var signInTab = document.getElementsByClassName("signinContainer");

const goToSignup = function() {
  signUpTab[0].style.display = "block";
  signInTab[0].style.display = "none";
  console.log("Signup");
};

const goToSignin = function() {
  signUpTab[0].style.display = "none";
  signInTab[0].style.display = "block";
  console.log("Signin");
};
