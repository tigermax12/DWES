<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (validate_form()){
        process_form();
    } else {
        show_form();
    }
} else {
    show_form();
}

function process_form(){
    print "Hello, ". $_POST["my_name"];
}

function show_form(){
    print<<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
        Your name: <input type="text" name="my_name"><br>
        Your age: <input type="number" name="my_age"><br>
        <input type="submit" value="Say Hello">
    </form>     
_HTML_;
}
function validate_form(){
    if (strlen($_POST["my_name"]) < 3 ) {
        print_r("El nombre debe tener mas de 3 caracteres");
        return false;
    } else {
        return true;
    }
}

    if ($_POST["my_age"] < 18 || $_POST["my_age"] > 25 ) {
            print_r("La edad debe ser mayor de 18 y mayor que 25");
            return false;
        } else {
            print_r("Buen trabajo");
            echo "</br>";
            return true;
        }


