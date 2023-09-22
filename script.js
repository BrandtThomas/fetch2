// Faites une requête Fetch pour obtenir les données depuis le fichier PHP
fetch('get.php')
    .then(response => response.json())
    .then(data => {
        // Manipulez les données ici, par exemple, affichez-les dans la console
        console.log(data);

        // Vous pouvez également utiliser les données pour mettre à jour votre page web ici
    })
    .catch(error => {
        console.error('Une erreur s\'est produite lors de la récupération des données :', error);
    });
