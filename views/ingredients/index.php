<?php include ('views\pages\header.php'); ?>
<p>These are the ingredients we have at home, choose an ingredient to see what we can make today</p>

<form class="form-horizontal">
    <div class="form-group">
        <div class="col-md-10 columns">

            <form name="form1" id="search_form" method="post" action="" />
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
            </form>
        </div>
    </div>

</form>


<div id="sort_rang_result"></div>