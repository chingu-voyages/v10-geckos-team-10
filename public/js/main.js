var string = "Professionals who grow your <span id='business'>business!</span>";
var i = 0;
var isTag;
var text;

function type() {
  text = string.slice(0, ++i);
  if (text === string) return;

  document.getElementById("write").innerHTML = text;

  var char = text.slice(-1);
  if (char === "<") isTag = true;
  if (char === ">") isTag = false;

  if (isTag) return type();
  setTimeout(type, 80);
}
// setInterval(() => {
//   document.getElementById("write").innerHTML = "";
//   type();
// }, 5000);

// User Control section
// console.log(window.innerWidth);
var signUpTab = document.getElementsByClassName("signupContainer");
var signInTab = document.getElementsByClassName("signinContainer");

const goToSignup = function() {
  signUpTab[0].style.display = "block";
  signInTab[0].style.display = "none";
  // console.log("Signup");
};

const goToSignin = function() {
  signUpTab[0].style.display = "none";
  signInTab[0].style.display = "block";
  // console.log("Signin");
};
