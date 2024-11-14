<h1>Smartbike</h1>

<p>Dernier vélo ajouté :</p>

<?php foreach($dernierVelo as $velo){ ?>
    <img src="<?=$velo['image']?>">
    <p><?=$velo['description']?></p>
<?php } ?>