function afficherMasquer(id1, id2) {
    x=document.getElementById(id1);
    y=document.getElementById(id2);
    if(x.style.display=="")
        x.style.display="none";
    if(x.style.display == "none")
        x.style.display = "flex";
    else
        x.style.display = "none";
    if(y.innerHTML == "Voir tous les projets" && x.style.display == "flex")
        y.innerHTML = "Voir moins de projets";
    else 
        y.innerHTML = "Voir tous les projets";
}