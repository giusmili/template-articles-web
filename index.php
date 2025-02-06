<!-- header -->
<?php
    include_once __DIR__ ."/src/header.inc.php";
    include_once __DIR__ ."/src/connect_bdd.inc.php";
?>

<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <picture>
        <source srcset="./asset/cover.png"
                media="(orientation: portrait)">
        <img src="./asset/cover.png" alt="cover" loading="lazy">
    </picture>
    <main>
        <!-- partie dynamique: date et version -->
      
        <h2>Nous sommes le 
          <time datetime="<?= $_datetime ?>"><?= $_date_php ?></time> 
        </h2>
            <p>
           

                Mise à jour PHP <?= $_modif_php ?> <br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        
    <?php
        include_once __DIR__."/src/connect.inc.php";
    ?>
   <!--end -->
    <nav>
        <a class="button" href="search.php">
            Rechercher les articles
        </a>
     
    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - <time 
        datetime="<?= $_datetime ?>">
        <?= $_date_php ?>
        </time></p>
    </footer>
   
</body>
</html>