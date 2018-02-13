<?php include ('views\pages\header.php'); ?>
<p>Here is a list of all recipes:</p>

<?php foreach($recipes as $recipe) { ?>
    <p>
        <?php echo $recipe->recipe_name; ?>
        <a href='?controller=recipes&action=show&recipe_id=<?php echo $recipe->recipe_id; ?>'>See recipe</a>
    </p>

<?php } ?>
