<?php foreach($velo as $infos){ ?>
    <img src="<?=$infos['image']?>">
    <p><?=$infos['description']?></p>
    <a href="index.php?page=commander">Commander</a>
<?php } ?>