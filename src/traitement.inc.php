<?php
    
    include_once "./src/connect_bdd.inc.php";

//tester nos variables
if(isset($_POST["titre"]) || isset($_POST['contenu'])){
    $_title = $_POST["titre"];
    $_content = $_POST["contenu"];

    
    
    if(!$_title || !$_content){
        print "<p class=\"warning\"> Champs vides veuillez les remplir</p>";

    }
    else if(is_numeric($_content)){
        print "<p class=\"warning\"> Veuillez saisir des lettres</p>";
    }
    else{
        $date_publication = date("Y-m-d:H:i:s");
        $_req = $_bdd->prepare('INSERT INTO post(titre, contenu, date_creation)VALUES(?,?,?)');
        $_req->execute(array(htmlentities($_title), $_content, $date_publication));
        print '<p class="success"> 
                Vos données ont envoyées 
                
                </p>
            <a href="index.php" class="button">Voir les publications</a>';

    }

}
   
?>