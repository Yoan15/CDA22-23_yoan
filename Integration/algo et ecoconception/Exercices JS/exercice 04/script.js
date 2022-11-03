qt1 = document.getElementById("qt1");
pu1 = document.getElementById("pu1");
qt2 = document.getElementById("qt1");
pu2 = document.getElementById("pu2");

var validation = new RegExp("/^[0-9]*$/");
var resultat = validation.test(qt1);
console.log(resultat);