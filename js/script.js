document.querySelector("button").addEventListener("click", () => {

    // Contiendra la valeur/name du Pokémon entré dans l'input
    let auteur = document.querySelector("input").value;
    let livre = document.querySelector("input").value;
    let pages = document.querySelector("input").value;
    
    
    // Quand la requête fetch() est terminée, on stocke son contenu dans la variable response
    .then((response) => {
        response.json()
        .then((data) => {
    
        // A chaque clic du bouton, on vide notre balise <main>
        document.querySelector("main").innerHTML = '';
        
        // Création de la <table> en HTML
        let tableElement = document.createElement("table");
        document.querySelector("main").appendChild(tableElement);
    
        // Création de notre <thead> en HTML
        let theadElement = document.createElement("thead");
        tableElement.appendChild(theadElement);
        
        // Création de notre premier <tr> en HTML
        let trElement1 = document.createElement("tr");
        theadElement.appendChild(trElement1);
    
        // Création de nos <th> en HTML
        let thElement1 = document.createElement("th");
        let thElement2 = document.createElement("th");
        let thElement3 = document.createElement("th");
        let thElement4 = document.createElement("th");
    
        // Insertion de données dans nos <th>
        thElement1.innerHTML = "Auteur";
        thElement2.innerHTML = "Titre du livre";
        thElement3.innerHTML = "Nombre de pages";
        thElement4.innerHTML = "Genre(s)";
    
        trElement1.appendChild(thElement1);
        trElement1.appendChild(thElement2);
        trElement1.appendChild(thElement3);
        trElement1.appendChild(thElement4);
    
        // Création de notre <tbody> et ajout à notre <table>
        let tbodyElement = document.createElement("tbody");
        tableElement.appendChild(tbodyElement);
    
        // Création de notre second <tr> et ajout à notre <tbody>
        let trElement2 = document.createElement("tr");
        tbodyElement.appendChild(trElement2);
    
        // Création de nos <td> en HTML
        let tdElement1 = document.createElement("td");
        let tdElement2 = document.createElement("td");
        let tdElement4 = document.createElement("td");
        let tdElement5 = document.createElement("td");
    
        // Création de notre balise <img> pour l'insérer dans notre dernier <td>
        let imgElement = document.createElement("img");
        imgElement.setAttribute("src", data.sprites.front_shiny);
        tdElement8.appendChild(imgElement);
    
        // Insertion de données dans nos <td>
        tdElement1.innerHTML = data.auteur;
        tdElement2.innerHTML = data.titre[0];
        tdElement3.innerHTML = data.pages[0];
        tdElement4.innerHTML = data.genre[0];
    
        
        trElement2.appendChild(tdElement1);
        trElement2.appendChild(tdElement2);
        trElement2.appendChild(tdElement3);
        trElement2.appendChild(tdElement4);
    });
    });
    });