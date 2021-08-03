

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 


function record(){
	console.log("It was clicked.");
}
var ul = document.getElementById("ul");
ul.addEventListener('click', record, false);

alert("sometext");
