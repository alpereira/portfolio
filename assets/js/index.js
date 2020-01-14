document.addEventListener("DOMContentLoaded", function(event) {

        console.log('loaded')

});

function Toggle() {

        var menu = document.getElementById("toggle-menu")

        if(menu.style.display == "none") {

                menu.style.display = "block";

        } else {

                menu.style.display = "none"

        }

}

function Register() {

        var name = document.form.name.value;

        var firstname = document.form.firstname.value;

        var company = document.form.company.value;

        var phone = document.form.phone.value;
        
        var message = document.form.message.value; 

        console.log("Bonjour, je suis " + firstname + " " + name + ", je travaille pour " + company
                + " et je souhaiterai vous parler. Vous pouvez me joindre au " + phone + ". " + message + "."
        );

}