calcul1 = document.querySelectorAll("[data-calcul1]");
//prix1 = document.querySelectorAll("[data-prix1]");
calcul2 = document.querySelectorAll("[data-calcul2]");
//prix2 = document.querySelectorAll("[data-prix2]");
prixTotal = document.querySelectorAll("[data-prixtotal]");

calcul1.forEach(element =>{
    element.addEventListener("blur", calculPrix1);
    console.log(element);
});

function calculPrix1(event) {

    /*********TESTS********** */
    qte1 = document.getElementById("qte1").value; //arrive a récupérer la valeur
    console.log(qte1);
    pu1 = document.getElementById("pu1").value; //arrive a récupérer la valeur
    console.log(pu1);
    p1 = parseInt(qte1)*parseFloat(pu1);
    console.log(p1);
    document.getElementById("p1").value = p1; //arrive a mettre la valeur dans l'input


    // calcul1 = event.target;
    // if (calcul1.getAttribute("data-calcul1")) {
    //     qte1 = calcul1.value;
    //     console.log(qte1);
    //     pu1 = calcul1.nextElementSibling.value;
    //     console.log(pu1);
    // }
}

calcul2.forEach(element =>{
    element.addEventListener("blur", calculPrix2);
    console.log(element);
});

function calculPrix2(event) {
    
    /*********TESTS********** */
    qte2 = document.getElementById("qte2").value; //arrive a récupérer la valeur
    console.log(qte2);
    pu2 = document.getElementById("pu2").value; //arrive a récupérer la valeur
    console.log(pu2);
    p2 = parseInt(qte2)*parseFloat(pu2);
    console.log(p2);
    document.getElementById("p2").value = p2; //arrive a mettre la valeur dans l'input
}

prixTotal.forEach(element =>{
    element.addEventListener("blur", calculPrixTotal);
    console.log(element);
});

function calculPrixTotal(event) {
    
    /*********TESTS********** */
    p1 = document.getElementById("p1").value; //arrive a récupérer la valeur
    console.log(p1);
    p2 = document.getElementById("p2").value; //arrive a récupérer la valeur
    console.log(p2);
    pt = parseFloat(p1) + parseFloat(p2);
    console.log(pt);
    document.getElementById("pt").value = pt; //arrive a mettre la valeur dans l'input
}

function disableTotal(){
    pt = document.getElementById("pt").disabled = true;
}

/********REGEX********** */
// var validation = new RegExp("/^[0-9]*$/");
// var resultat = validation.test(qt1);
// console.log(resultat);