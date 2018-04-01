<div id="wpr-image-recipy">

    <?php if($recipe->image_url):?>
         <img class="img-responsive" src="<?php echo $recipe->image_url;?>">
        <?php else:?>
        There is no picture yet
    <?php endif;?>
</div>

<div id="wpr-content-recipy">

    <ul id="ingredients">
        <?php foreach ($recipe_ingredients as $ingredient): ?>
            <li> <?php echo ($ingredient['ingredient_name']);?></li>
        <?php endforeach; ?>
    </ul>

    <span>
        <h1><?php echo $recipe->recipe_name; ?></h1>
        <p><?php echo $recipe->description; ?></p>
    </span>

    <div id="wpr-preparation-fixed">
        <div id="content">
            <h3>01.Preparation</h3>
            <span>
             <p><?php echo $recipe->instructions;?></p>
                <img class="img-responsive" src="https://i.ytimg.com/vi/esGbGwRbjvc/maxresdefault.jpg"width="400">
            </span>
        </div>
    </div>
</div>

<div id="wpr-ingredients-recipy">
    <h3>Ingredients</h3>
    <?php echo $recipe->ingredients; ?>

</div>





<!--<div id="wpr-recipy">
  <div id="cnr-recipy">
     <article>
        <img class="img-responsive" src="http://www.beatosvirtuve.lt/wp-content/uploads/2015/09/Beatos-virtuve_vietnamas-614x370.jpg">
        <span>
           <h1><?php /*echo $recipe->recipe_name; */?></h1>
         <p><?php /*echo $recipe->description; */?></p>

         <p><?php /*echo $recipe->instructions;*/?></p>



         <?php /*foreach ($recipe_ingredients as $ingredient): */?>
          <?php /*echo ($ingredient['ingredient_name']);*/?>
         <?php /*endforeach; */?>
        </span>
     </article>
  </div>
</div>
-->





