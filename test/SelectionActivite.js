var getlocation = document.location.href;
var url = new URL(getlocation);
// var page = url.searchParams.get('page');
//on récupère l'id de la prestation grâce 
var idPrestation = url.searchParams.get('id');

var checkbox = document.querySelectorAll(".removeShadow");
checkbox.forEach((element) => {
    element.addEventListener('change', activiteTypePresta)
});

function activiteTypePresta(e)
{
    element = e.target;

    idActivite = element.getAttribute("data-id");

    var request = new XMLHttpRequest();
    if (element.checked == true) {
        action = 0;
    }
    else
    {
        action = 1;
    }

    request.open('POST', 'index.php?page=SelectionActiviteAPI', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    args = "mode=" + action + "&idTypePrestation=" + idPrestation + "&idActivite=" + idActivite;
    request.send(args);
}