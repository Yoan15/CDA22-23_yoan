var getlocation = document.location.href;
var url = new URL(getlocation);
var page = url.searchParams.get('page');

var requete = new XMLHttpRequest();

requete.open('POST')