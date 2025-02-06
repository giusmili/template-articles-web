<?php
    include_once __DIR__."./src/header.inc.php";
    include_once __DIR__."./src/connect_bdd.inc.php";
    print "\n<body>";
    
?>

    <header>
        <h1>PHP - articles and post</h1>
    </header>
<main>
<div class="form" role="region">
<?php
    include_once __DIR__."./src/traitement.inc.php";
?>
    <fieldset>
        <legend>Poster vos publications</legend>
                                
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post"><!-- get -->
                <label for="titre">Ajoutez un titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus="true">
                    <label for="contenu">Insérer un contenu</label>
                    <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
                    <input type="submit" value="Envoyer">
            </form>
                
               
        </fieldset>
        

</div>
      
</main>
    
<footer>
        <p>&copy; - MIT - <?= $_datetime ?></p>
</footer>
</body>
</html>