<?php

foreach($velos as $velo){ ?>
    <img src="<?=$velo['image']?>">
    <h2><?=$velo['prix']?> €</h2>
    <a href="index.php?page=commander">Commander</a>
    <a href="index.php?page=infos&velo=<?=$velo['id_produit']?>">Plus d'infos</a> <br>
<?php } ?>