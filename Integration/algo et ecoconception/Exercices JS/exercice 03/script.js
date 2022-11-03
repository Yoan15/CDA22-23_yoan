var element = document.getElementById("ampoule");
element.addEventListener("click", function () {
    (this.src.match("eteinte")) ? this.src='ampoule_allumee.png' : this.src='ampoule_eteinte.png';
});