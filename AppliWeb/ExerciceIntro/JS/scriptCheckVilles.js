// V 0.5

// var getlocation = document.location.href;
// var url = new URL(getlocation);
// var idDepartement = url.searchParams.get("id");

// checks = document.querySelectorAll(".test");
// checks.forEach((event) => {
//     event.addEventListener("change", checkedVille);
// });

// function checkedVille(e)
// {
//     checkbox = e.target;
//     idVille = checkbox.getAttribute("data-id");
//     var requete = new XMLHttpRequest();
//     if (checkbox.checked == true) {
//         //suppression
//         action = 0;
//     } else {
//         //ajout
//         action = 1;
//     }

//     requete.open("POST", "index.php?page=MajVillesDepartementApi", true);
//     requete.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     args = "mode="+ action + "&idVille=" + idVille + "&idDepartement=" + idDepartement;
//     requete.send(args);
// }

var getlocation = document.location.href;
var url = new URL(getlocation);
var idDepartement = url.searchParams.get("id");

checkboxes = document.querySelectorAll(".test");
checkboxes.forEach(element => {
    element.addEventListener("change", checkVille);
});

function checkVille(event) {
    checkbox = event.target;
    idVille = checkbox.getAttribute("data-id");
    var requete = new XMLHttpRequest();
    if (checkbox.checked == true) {
        action = 0;
    } else {
        action = 1;
    }

    requete.open("POST", "index.php?page=MajVillesDepartementApi", true);
    requete.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    args = "mode=" + action + "&idDepartement=" + idDepartement + "&idVille=" + idVille;
    requete.send(args); 
}