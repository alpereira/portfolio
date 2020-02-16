document.addEventListener("DOMContentLoaded", function(event) {

        console.log('loaded')

});

function AddProject() {

        let clientName = document.addProject.nom_client.value;

        let projectName = document.addProject.nom_projet.value;

        let description = document.addProject.description_projet.value;
        
        let photo = document.addProject.photo_projet.value; 

        console.log("Projet pour " + clientName + ", du nom de " + projectName
                + " et qui consiste à " + description + ". Aperçu:" + photo + "."
        );

}