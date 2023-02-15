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
    nomVille = checkbox.getAttribute("data-name");
    var requete = new XMLHttpRequest();
    if (checkbox.checked == true) {
        action = 0;
    } else {
        action = 1;
    }

    requete.open("POST", "index.php?page=MajVillesDepartementApi", true);
    requete.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    args = "mode=" + action + "&idDepartement=" + idDepartement + "&idVille=" + idVille + "&nomVille=" + nomVille;
    requete.send(args); 
}