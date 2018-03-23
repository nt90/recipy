<?php include ('views\pages\header.php'); ?>
<p>These are the ingredients we have at home, choose an ingredient to see what we can make today</p>

<form method="post" name="input" action="<?php $_SERVER['PHP_SELF']; ?>">
    <select name="ingredientNew">
        <?php foreach ($ingredients_all as $ingredient_name) {?>
             <option value="<?php echo $ingredient_name->name; ?>"><?php echo $ingredient_name->name; ?></option>
        <?php }?>
    </select>
    <input type="submit" name="submit" value="Add ingredient" />
</form>

<form class="form-horizontal">
    <div class="form-group">
        <div class="col-md-10 columns">

            <ul>

                <?php foreach($ingredients as $ingredient_name) { ?>
                    <li>
                        <label class="checkbox-inline" for="<?php echo $ingredient_name->name; ?>">
                            <input type="checkbox" name="sortRecipe[]" class="filter_ingredients" value="<?php echo $ingredient_name->name; ?>">
                                <?php echo $ingredient_name->name; ?>
                        </label>
                    </li>
                <?php } ?>

            </ul>

        </div>
    </div>

</form>


<div id="wpr-result-recipes"></div>