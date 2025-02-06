<!--itération avec la bdd -->

<?php foreach($_response as $_article):?> <!--itération avec la bdd -->
    <article>
        <h2>
            <a href="article.php?id=<?= $_article["id"]?>">
            <?= strip_tags($_article['titre'])?></a>
            <!-- la méthode strip_tags() permet de filtrer les caractère 
            illégaux-->
        </h2>
        <p>
            <?= $_article['contenu'] ?>
      

        </p>
        <time datetime="<?= $_article['date_modification']?>">
            Date de modification : <?=$_article['date_modification']?>
        </time>
        <span class="material-symbols-outlined" aria-hidden="true">
                thumb_up
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">
                thumb_down_off
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">
                favorite
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">
                comment
        </span>

    </article>
    
<?php endforeach; ?>