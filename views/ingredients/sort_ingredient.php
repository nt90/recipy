<section class="experience">
    <div class="wrapper">
        <h4>Delightful</h4>
        <h3>Recipes with </h3>
        <section>
            <?php foreach($filtered_ingredients as $filter_ingredient): ?>
                <div class="col-sm-3 wrapper_content" style="background-image:url(<?php echo ($filter_ingredient['image_url']);?>)">
                    <span class="name_recipy">
                        <?php echo ($filter_ingredient['recipe_name']);?>
                    </span>
                    <a class="link_recipy" href='?controller=recipes&action=show&recipe_id=<?php echo ($filter_ingredient['recipe_id']);?>'>
                        Cook this recipe
                    </a>
                </div>
            </a>
            <?php endforeach;?>

        </section>
    </div>
</section>

