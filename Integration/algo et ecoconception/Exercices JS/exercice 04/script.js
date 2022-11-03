// qt1 = document.getElementById("qt1");
// pu1 = document.getElementById("pu1");
// qt2 = document.getElementById("qt2");
// pu2 = document.getElementById("pu2");
// p1 = document.getElementById("p1");
// p2 = document.getElementById("p2");
calcul1 = document.querySelectorAll("[data-calcul1]");
prix1 = document.querySelectorAll("[data-prix1]");
calcul2 = document.querySelectorAll("[data-calcul2]");
prix2 = document.querySelectorAll("[data-prix2]");
prixTotal = document.querySelectorAll("[data-prixtotal]");

calcul1.forEach(element =>{
    element.addEventListener("blur", calculPrix1);
    console.log(element);
});

function calculPrix1(event) {
    
    /*********TESTS********** */
    // qte1 = document.getElementById("qte1").value; //arrive a récupérer la valeur
    // console.log(qte1);
    // pu1 = document.getElementById("pu1").value; //arrive a récupérer la valeur
    // console.log(pu1);
    // p1 = qte1*pu1;
    // console.log(p1);
    // document.getElementById("p1").value = p1; //arrive a mettre la valeur dans l'input


    // qte1 = event.target;
    // qte1 = calcul1.getAttribute("data-calcul1")=="qte1";
    // console.log(qte1);
}

calcul2.forEach(element =>{
    element.addEventListener("blur", calculPrix2);
    console.log(element);
});

function calculPrix2(event) {
    
}

function disableTotal(){
    pt = document.getElementById("pt").disabled = true;
}

/********REGEX********** */
// var validation = new RegExp("/^[0-9]*$/");
// var resultat = validation.test(qt1);
// console.log(resultat);