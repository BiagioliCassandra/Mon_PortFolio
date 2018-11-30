<?php 
//I check that the form is not empty
if(!empty($_POST)) {
    //If it does not, I secure the data and save it to the database
    
}
//If not, the case I display an error message
else {
    echo '<div class="alert alert-danger" role="alert">Merci de remplir le formulaire svp!</div>';
}
?>