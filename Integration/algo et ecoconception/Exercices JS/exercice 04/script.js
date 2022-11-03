// qt1 = document.getElementById("qt1");
// pu1 = document.getElementById("pu1");
// qt2 = document.getElementById("qt2");
// pu2 = document.getElementById("pu2");
// p1 = document.getElementById("p1");
// p2 = document.getElementById("p2");
lesQuantites = document.querySelectorAll("[data-quantite]");
lesPrixUnitaires = document.querySelectorAll("[data-prixuni]");
lesPrix = document.querySelectorAll("[data-prix]");
prixTotal = document.querySelectorAll("[data-prixtotal]");

lesQuantites.foreach(element =>
    element.addEventListener("blur", ));

function calculPrix1() {
    
}

// var validation = new RegExp("/^[0-9]*$/");
// var resultat = validation.test(qt1);
// console.log(resultat);