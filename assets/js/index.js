document.addEventListener("DOMContentLoaded", function(event) {

        console.log('loaded')

});

function ToggleMenu() {

        let menu = document.getElementById("toggle-menu")

        if(menu.style.display == "none") {

                menu.style.display = "block";

        } else {

                menu.style.display = "none"

        }

}

function Submit() {

        let name = document.form.name.value;

        let company = document.form.company.value;

        let phone = document.form.phone.value;
        
        let message = document.form.message.value; 

        console.log("Bonjour, je suis " + name + ", je travaille pour " + company
                + " et je souhaiterai vous parler. Vous pouvez me joindre au " + phone + ". " + message + "."
        );

}
