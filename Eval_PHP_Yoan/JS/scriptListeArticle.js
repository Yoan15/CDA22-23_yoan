var getlocation = document.location.href;
var url = new URL(getlocation);
var page = url.searchParams.get('page');

if (page == 'listeArticle') {
    var requete = new XMLHttpRequest();
    requete.open('POST', 'index.php?page=ListeArticlesApi', true);
    requete.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    requete.send();
    
    requete.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                reponse = JSON.parse(this.responseText);
                reponse.forEach(element => {
                    template = document.getElementById("article");
                    cible = document.getElementById("articles");
                    contenu = template.content.cloneNode(true);
                    cible.appendChild(contenu);

                    arti = document.querySelector(".arti")
                    arti.innerHTML = element
                })
            }
        }
    }
}