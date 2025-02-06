<?php
    include_once "./src/header.inc.php";
    include_once "./src/connect_bdd.inc.php";
    print "\n<body>"
?>

<header>
    <h1>PHP - articles and post</h1>
</header>

    <main>
        <h2>Post publié</h2>
        <p>
            Mise à jour PHP <?= $_modif_php ?>
        </p>
        <!-- test de la requete -->
        <?php
            if(!isset($_GET["id"]) || empty($_GET["id"])){
                //response
                header("Location: article.php");
                exit;
            }
            //get id
            $_id = $_GET["id"];
            $_sql = "SELECT * FROM `post` WHERE `id` = :id"; /* cela sélectionne le nombre de lignes à partir de la clé */

            //prepare request
            $_request = $_bdd->prepare($_sql);
            $_request->bindValue(":id", $_id, PDO::PARAM_INT); 
            /* bindValue  permet d'associer un nom (utilisé dans la requête) à une variable*/
            $_request->execute();
            $_article =  $_request->fetch();

            //verify article
            if(!$_article){
                http_response_code(404);
                print "Article not found!";
                exit;
            }
        ?>
        <article>   
            <h2>
                <?= strip_tags($_article['titre'])?>
                <!-- numéro de l'article -->
                <?= " article numéro ".$_article['id']?>
            </h2>
            <p>
                <?= $_article['contenu']?>
            </p>
            <time datetime="<?= $_article['date_modification']?>">
                <?= $_article['date_modification']?>
            </time>
            
        </article>
        <nav>
            <a class="button" href="index.php">Go home</a><!--
        --><a class="button" href="pub.php">Publier un article</a><!--
        --><a class="button" href="search.php">Rechercher les articles</a>
        </nav>
    </main>
            <footer>
                
                <p>&copy; - MIT - <?= $_datetime ?></p>
                
            </footer>
    </body>
    </html>