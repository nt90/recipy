<?php require_once ('header.php'); ?>
<div id="wpr-cover"">
<div id="cnr-center">
    <h1 class="text-center">Cook with the ingredients you have in your fridge</h1>
    <span class="text-center">(check the ingredients you want to cook with)</span>
    <div id="wpr-ingredients">
        </form>
        <div class="row">
            <form name="form1" id="search_form" method="post" action="" />
            <div class="form-group">
                <?php foreach($ingredients as $ingredient_name) { ?>
                    <div class="col-md-3 text-center">
                        <label class="image-checkbox" title="<?php echo $ingredient_name->name; ?>">
                            <img class="img-responsive" src="<?php echo $ingredient_name->ingredient_image; ?>" />
                            <input type="checkbox" name="sortRecipe[]" class="filter_ingredients" value="<?php echo $ingredient_name->name; ?>">
                        </label>
                    </div>
                <?php } ?>

            </div>
            </form>
        </div>
    </div>
</div>
</div>


<div id="wpr-result-recipes"></div>

