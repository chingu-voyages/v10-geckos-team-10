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
